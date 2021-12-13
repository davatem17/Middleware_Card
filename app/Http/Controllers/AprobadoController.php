<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AprobadoController extends Controller
{
    public function create(){
        return view('auth.aprobado');
    }
}
