<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamenFinal extends Controller
{
    public function index(){
        return view('home');
    }

    public function examen_final_blanco(){
        return view('examen_final_blanco');


        //return view('pagina2', compact('datos'));
    }
}
