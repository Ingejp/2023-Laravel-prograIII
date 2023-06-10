@extends('daniellayoyt')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidot')
    <div class="card">
        <h5 class="card-header">Agregar nuevo transporte</h5>
        <div class="card-body">

            <p class="card-text">

                @csrf
                <label for="">Id</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">apellido</label>
                <input type="text" name="id" class="form-control" required>
                <label for=""> carnet</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">nota_examen_final</label>
                <input type="text" name="id" class="form-control" required>
                <br>
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span>Agregar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection

