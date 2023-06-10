@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <br>
    <h3><div class="text-center" >
            Sistema para el registro de transacciones
        </div>
    </h3>
@endsection

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

        <a href="{{ route('pagina2') }}" class="btn btn-primary">Botón</a>

        <a href="{{route('examen_final_blanco')}}" class="btn btn-primary">Botón</a>



    </div>

@endsection
