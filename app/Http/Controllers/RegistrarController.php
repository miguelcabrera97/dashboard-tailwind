<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrarController extends Controller
{
    public function paises()
    {
        $pais = DB::table("pais")->select('id','nombre')->get();
        return view('auth.register', ['paislist' => $pais]);

    }
}
