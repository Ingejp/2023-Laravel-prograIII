@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <p>Este es el texto de la vista secundaria.</p>
@endsection

@section('content')
    @extends('layout')

    @section('title', 'Page Title')

    @section('sidebar')

    @endsection

    @section('content')
        <form action="{{ route('examen_final_blanco') }}" method="POST" class="m-3">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="carne">Carné:</label>
                <input type="text" id="carne" name="carne" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nota">Nota examen final:</label>
                <input type="number" id="nota" name="nota" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>

    @endsection

