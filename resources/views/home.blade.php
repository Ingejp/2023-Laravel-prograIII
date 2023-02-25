@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>Este es el texto de la vista principal.</p>
@endsection

@section('content')
    <p>Este es el contenido de la vista</p>
    <a href="{{route('pagina2')}}"> Links a pagina 2</a>
@endsection
