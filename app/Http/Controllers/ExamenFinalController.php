<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamenFinalController extends Controller
{
    public function index()
    {
        return view('home');
    }


    public function store(Request $request)
    {
        //sirve para guardar datos en la bd
        $registro = new Registro();
        $registro->nombre = $request->post('nombre');
        $registro->apellido = $request->post('apellido');
        $registro->carne = $request->post('carne');
        $registro->nota_examen = $request->post('notaexamenfinal');
        $registro->save();

        return redirect()->route("examen.index")->with("success", "Agregado con exito!");
    }

}
