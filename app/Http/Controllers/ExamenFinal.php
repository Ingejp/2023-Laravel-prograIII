<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamenFinal extends Controller
{
    public function index(){
        return view('home');
    }

    public function pagina3(){
        return view('pagina3');


        //return view('pagina2', compact('datos'));
    }
}
