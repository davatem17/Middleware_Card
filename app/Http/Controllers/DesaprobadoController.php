<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaprobadoController extends Controller
{
    public function create(){
        return view('auth.desaprobado');
    }
}
