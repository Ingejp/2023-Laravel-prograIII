@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <p>Este es el texto de la vista secundaria.</p>
@endsection

@section('content')
    <a href="{{route('lista-alumnos')}}">Links a pagina principal</a>
    <button>Guardar</button>
@endsection
