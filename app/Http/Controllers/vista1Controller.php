<?php

namespace App\Http\Controllers;

use App\Models\medicina;
use Illuminate\Http\Request;

class vista1Controller extends Controller
{
    public function vista_inicial(){
        $medicinas = Medicina::All();
        return view('vista1', ['medicinas' => $medicinas]);
    }
}
