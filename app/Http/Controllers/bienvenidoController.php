<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bienvenidoController extends Controller
{
    function funcionBienvenido(){
        return view('bienvenido');
    }
}
