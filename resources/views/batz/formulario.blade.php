@extends('batz/plantilla')

@section("tituloPagina", "Formulario de Registro Batz")

@section('contenido')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="card">
        <h5 class="card-header">Formulario de Registro Edwing Batz</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="#" method="POST">
                @csrf


                <!--Ingreso del Nombre-->
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required><br>

                <!--Ingreso del Nombre-->
                <label for="">Apellido</label>
                <input type="text" name="apellido" class="form-control" required><br>

                <!--Ingreso del Nombre-->
                <label for="">Carné</label>
                <input type="text" name="carne" class="form-control" required><br>

                <!--Ingreso del Nombre-->
                <label for="">Nota Examen Final</label>
                <input type="text" name="nota_examen_final" class="form-control" required><br>




                <br>
                <a href="#" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar
                </button>

            </form>
            </p>

        </div>
    </div>
@endsection
