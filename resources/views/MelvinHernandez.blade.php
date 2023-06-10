@extends('layout')
@section('content')
<div class="form-floating mx-1">
    <form class="p-3 bg-white mb-3 ">
        @csrf
        @method('POST')
        <h2>Formulario Examen final</h2>
        <br>
        <div class="form-floating mx-1">
            <input type="text" class="form-control"  name="nombre" id="exampleFormControlInput1" placeholder="Nombre">
            <label for="nombre" class="form-label">Nombre</label>
        </div>
        <div class="mb-3">

            <input type="text" class="form-control" name="apellido" id="exampleFormControlInput1" placeholder="Apellido">
            <label for="apellido" class="form-label">Apellido</label>
        </div>
        <div class="mb-3">

            <input type="text" class="form-control"  name="carne" id="exampleFormControlInput1" placeholder="Carne">
            <label for="name" class="form-label">Carne</label>
        </div>
        <div class="mb-3">

            <input type="text" class="form-control" name="nota" id="exampleFormControlInput1" placeholder="NotaExamenFinal">
            <label for="nota" class="form-label">Nota examen Final</label>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
            <a href="{{url('/')}}" class="btn btn-danger">Cancelar <i class="fas fa-arrow-alt-circle-left"></i></a>
        </div>
    </div>

@endsection

