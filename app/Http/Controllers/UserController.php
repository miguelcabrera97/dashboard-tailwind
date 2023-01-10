<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //Muestra los usuarios registrados en el sistema
    public function index(){
        $users = DB::table('users')->get();
        return view('users.index', ['users' => $users]);
    }

    //Muestra los sitios creados por el usuario mediante BD
    public function show(){
        $sites = DB::table('sitios')->where('email',''.Auth::user()->email.'')->orderBy('id', 'desc')->get();
        $facturacion = DB::table('facturacion')->get();
        //return $sites;
        return view('users.sites', compact('sites','facturacion'));
    }

    public function plantillas(){
        $templates = DB::table('templates')->get();
        return view('pages.templates.templates',['templates' => $templates]);
    }
}
