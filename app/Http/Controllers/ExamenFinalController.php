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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamenFinal  $examenFinal
     * @return \Illuminate\Http\Response
     */
    public function show(ExamenFinal $examenFinal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamenFinal  $examenFinal
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamenFinal $examenFinal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExamenFinal  $examenFinal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamenFinal $examenFinal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamenFinal  $examenFinal
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamenFinal $examenFinal)
    {
        //
    }
}
