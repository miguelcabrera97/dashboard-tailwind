<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SoporteController extends Controller
{
    public function sitios(){
         $sitelist = DB::table('sitios')->where('email', Auth::user()->email)->get();
         return view('soporte.soporte', ['sitelist' => $sitelist]);
    }

    // Redirecciona al usuario a la vista de Tickets ( Todos los tickets que hasta el momento el usuario ha creado)
    public function ticket()
    {
        return view('soporte.tickets');
    }


    public function InsertDataSupport(Request $data)
    {
        // SE VERIFICA SI SE INGRESA UN SITIO EN ESPECIFICO O SI LA CONSULTA ES GENERAL
        if ( $data->siteid_soporte != 'N/A')
        {
            $nombresitio = DB::table("sitios")->where("siteid", $data->siteid_soporte)->value('nombre');
        }else {
            $nombresitio = 'N/A';
        }

        $nombre =  DB::table("users")->where("email", Auth::user()->email)->value('name');

        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $tamanio  = 7;

        $longitud = strlen($caracteres);
        $cadena_aleatoria = '';
        for( $i = 0; $i < $tamanio ; $i++)
        {
           $cadena_aleatoria .= $caracteres[random_int(0, $longitud- 1)];
        }



        DB::table('support')->insert([
            ['idTicket'=>$cadena_aleatoria, 'idTemplate'=> $data->siteid_soporte, 'NombreSitio'=>$nombresitio, 'NombreUser'=> $nombre, 'email'=> Auth::user()->email, 'motivo'=> $data->motivo, 'descripcion'=> $data->support_description],
        ]);
        return view('soporte.success');

       // return $nombresitio;
    }





    public function sucess_sup ()
    {
        return view('soporte.success');
    }


}
