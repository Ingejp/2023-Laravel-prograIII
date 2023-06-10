@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <p>Este es el texto de la vista secundaria.</p>
@endsection

@section('content')
    <a>hola</a>
    <a href="{{route(examen_final_blanco)}}">Links a pagina principal</a>
    <button type="button" class="btn btn-primary float-left">Botón</button>



