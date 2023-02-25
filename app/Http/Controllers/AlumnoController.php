<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index(){
        return view('home');
    }

    public function pagina2(){
        return view('pagina2');


        //return view('pagina2', compact('datos'));
    }
}
