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

}
