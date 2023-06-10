<?php

namespace App\Http\Controllers;

use App\Models\AngelVargasC;
use Illuminate\Http\Request;

class AngelVargasCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('examen_final_Vargas');
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
     * @param  \App\Models\AngelVargasC  $angelVargasC
     * @return \Illuminate\Http\Response
     */
    public function show(AngelVargasC $angelVargasC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AngelVargasC  $angelVargasC
     * @return \Illuminate\Http\Response
     */
    public function edit(AngelVargasC $angelVargasC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AngelVargasC  $angelVargasC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AngelVargasC $angelVargasC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AngelVargasC  $angelVargasC
     * @return \Illuminate\Http\Response
     */
    public function destroy(AngelVargasC $angelVargasC)
    {
        //
    }
}
