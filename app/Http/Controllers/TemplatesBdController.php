<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemplatesBdController extends Controller
{
    public function templates(){

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.duda.co/api/sites/multiscreen/templates', [
        'headers' => [
            'Accept' => 'application/json',
            'Authorization' => 'Basic MTczMDA3ZDhlNTpUUWU5Wm5WeDB2dE4=',
        ],
        ]);

        $templates = json_decode($response->getBody());

        foreach($templates as $template){
            DB::table('templates')->insert([
                ['template_name' => ''.$template->template_name.'',
                'template_id' => ''.$template->template_id.'',
                'preview_url' => ''.$template->preview_url.'',
                'desktop_thumbnail_url' => ''.$template->desktop_thumbnail_url.'',
                ],
            ]);
        }



         return view('pages.templates.templates', compact('templates'));
         //return redirect()->route('plantillas', compact('templates'));
    }
}
