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

        DB::table('support')->insert([
            ['idTicket'=> "12345" , 'idTemplate'=> $data->siteid_soporte, 'NombreSitio'=>$nombresitio, 'NombreUser'=> $nombre, 'email'=> Auth::user()->email, 'motivo'=> $data->motivo, 'descripcion'=> $data->support_description],
        ]);
        return $nombresitio;
    }



}
