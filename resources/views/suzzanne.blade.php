@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <br>
    <h3><div class="text-center" >
            Registro
        </div>
    </h3>
@endsection

@section('content')
 
<div class="card col-6 ">
        <h3 class="card-header">Agregar nuevo</h3>
        <div class="card-body">
            <p class="card-text">
            <div class="modal-content">
                <form action="#" method="POST">
                    @csrf
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                    <label for="">Apellido</label>
                    <input type="text" name="razon_social" class="form-control">
                    <label for="">Carnet</label>
                    <input type="text" name="razon_social" class="form-control">
                    <label for="">Nota Examen Final</label>
                    <input type="text" name="razon_social" class="form-control">
                    <br>

                    <button class="btn btn-dark btn-sm">
                        <span class="bi bi-plus-circle"></span>  Agregar
                    </button>
                </form>
                </div>
            </p>
        </div>
    </div>

@endsection
