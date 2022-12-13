<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SitesController extends Controller
{
    //Muestra las plantillas disponibles a elegir
    public function show(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.duda.co/api/sites/multiscreen/templates', [
        'headers' => [
            'Accept' => 'application/json',
            'Authorization' => 'Basic MTczMDA3ZDhlNTpUUWU5Wm5WeDB2dE4=',
        ],
        ]);
        $templates = json_decode($response->getBody());
        return view('pages.templates.templates',compact('templates'));
    }

    //Proceso para Crear Sitio
    public function crear(Request $request){
        //Crea Sitio con la Plantilla Elegida
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://api.duda.co/api/sites/multiscreen/create', [
            'body' => '{"default_domain_prefix":"'.$request->nombre.'","template_id":"'.$request->template_id.'"}',
            'headers' => [
            'Accept' => 'application/json',
            'Authorization' => 'Basic MTczMDA3ZDhlNTpUUWU5Wm5WeDB2dE4=',
            'Content-Type' => 'application/json',
            ],
        ]);
        $site_name = json_decode($response->getBody()->getContents());

        DB::table('sitios')->insert([
            ['nombre' => ''.$request->nombre.'',
            'siteid' => ''.$site_name->site_name.'',
            'creado' => date('Y-m-d H:i:s'),
            'modification_date' => date('Y-m-d'),
            'publish_status' => 'EN CONSTRUCCION',
            'site_default_domain' => ''.$request->site_default_domain.'',
            'template' => ''.$request->template_id.'',
            'email' => ''.Auth::user()->email.''
            ],
        ]);

        //Otorga permisos del Sitio a la Cuenta
        $client3 = new \GuzzleHttp\Client();
        $response3 = $client3->request('POST', 'https://api.duda.co/api/accounts/'.$request->user.'/sites/'. $site_name->site_name.'/permissions', [
            'body' => '{"permissions":["EDIT","E_COMMERCE","DEV_MODE","BACKUPS","BLOG","PUSH_NOTIFICATIONS","PUBLISH","REPUBLISH"]}',
            'headers' => [
            'Accept' => 'application/json',
            'Authorization' => 'Basic MTczMDA3ZDhlNTpUUWU5Wm5WeDB2dE4=',
            'Content-Type' => 'application/json',
        ],
        ]);

        //Crea url al editor de DUDA y reedirige
        $client4 = new \GuzzleHttp\Client();
        $response3 = $client4->request('GET', 'https://api.duda.co/api/accounts/sso/'.$request->user.'/link?site_name='.$site_name->site_name.'&target=EDITOR', [
            'headers' => [
            'Accept' => 'application/json',
            'Authorization' => 'Basic MTczMDA3ZDhlNTpUUWU5Wm5WeDB2dE4=',
            ],
        ]);
        $site_name = json_decode($response3->getBody()->getContents());
        $site_url = $site_name->url;
        header("Location: ".$site_url);
        die();


    }

    //Editar Sitio
    public function editar($cuenta, $id){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.duda.co/api/accounts/sso/'.$cuenta.'/link?site_name='.$id.'&target=EDITOR', [
            'headers' => [
            'Accept' => 'application/json',
            'Authorization' => 'Basic MTczMDA3ZDhlNTpUUWU5Wm5WeDB2dE4=',
            ],
        ]);
        $site_name = json_decode($response->getBody()->getContents());
        $site_url = $site_name->url;
        return redirect()->away(''.$site_url.'');
    }

    //Resetear sitio con la plantilla que escogiste al inicio
    public function reset(Request $request){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://api.duda.co/api/sites/multiscreen/reset/'.$request->siteid.'', [
            'body'=>'{"template_id":"'.$request->template.'"}',
            'headers' => [
            'Accept' => 'application/json',
            'Authorization' => 'Basic MTczMDA3ZDhlNTpUUWU5Wm5WeDB2dE4=',
            'Content-Type' => 'application/json',
        ],
        ]);
        return redirect('/crearsitio');
    }

    // Eliminar Sitio
    public function delete($site,$id){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('DELETE', 'https://api.duda.co/api/sites/multiscreen/'.$site.'', [
        'headers' => [
            'Accept' => 'application/json',
            'Authorization' => 'Basic MTczMDA3ZDhlNTpUUWU5Wm5WeDB2dE4=',
        ],
        ]);

        $deleted = DB::table('sitios')->delete($id);

        return redirect()->action([UserController::class,'show']);
    }

    //Publicar Sitio
    public function publish(Request $request){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://api.duda.co/api/sites/multiscreen/publish/'.$request->siteid.'', [
        'headers' => [
            'accept' => 'application/json',
            'authorization' => 'Basic MTczMDA3ZDhlNTpUUWU5Wm5WeDB2dE4=',
        ],
        ]);

        $response = $client->request('GET', 'https://api.duda.co/api/sites/multiscreen/'.$request->siteid.'', [
            'headers' => [
              'accept' => 'application/json',
              'authorization' => 'Basic MTczMDA3ZDhlNTpUUWU5Wm5WeDB2dE4=',
            ],
        ]);

          $afectados = DB::table('sitios')->where('siteid', ''.$request->siteid.'')->update(['publish_status'=>'PUBLICADO']);
          return redirect()->action([UserController::class,'show']);
    }

    public function despublish(Request $request){
        //return $request->siteid;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://api.duda.co/api/sites/multiscreen/unpublish/'.$request->siteid.'', [
        'headers' => [
            'accept' => 'application/json',
            'authorization' => 'Basic MTczMDA3ZDhlNTpUUWU5Wm5WeDB2dE4=',
        ],
        ]);

        $afectados = DB::table('sitios')->where('siteid', ''.$request->siteid.'')->update(['publish_status'=>'EN CONSTRUCCION']);
        return redirect()->action([UserController::class,'show']);
    }
}
