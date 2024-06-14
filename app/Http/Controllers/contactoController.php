<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    function funcionContacto(){
        return view('contacto');
    }
}
