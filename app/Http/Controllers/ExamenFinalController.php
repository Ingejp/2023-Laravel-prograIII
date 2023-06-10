<?php

namespace App\Http\Controllers;

use App\Models\ExamenFinal;
use Illuminate\Http\Request;

class ExamenFinalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function examen_final_esquivel()
    {
        return view('examen_final_esquivel');
    }
}
