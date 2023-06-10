<?php

namespace App\Http\Controllers\Catalogos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamenFinal extends Controller
{
    public function index(){
        return view('examen_final_esquivel');
    }


}
