<?php

namespace App\Http\Controllers\Catalogos;

use App\Http\Controllers\Controller;
use App\Models\Camion;
use App\Models\Transporte;
use Illuminate\Http\Request;

class CamionController extends Controller{

public function index(){
    $camiones = Camion::paginate(10);
    return view('camion.list', compact('camiones'));
}

    public function register(){
        $transportes=Transporte::all();
        return view('customer.create', compact('transportes'));
    }
}
