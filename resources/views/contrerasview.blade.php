@extends('home')
@section('tituloPagina', ' Laravel 8')

@section('contenido')

    <div class="card">
        <h5 class="card-header">Ingeneria en Sistemas</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>
                    @endif


                </div>
            </div>
            <h5 class="card-title text-center">Registro </h5>
            <p>
                <a href="{{ route("personas.create") }}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar rgistro
                </a>
            </p>
            <hr>
            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                    <th>Nombre</th>
                    <th>Apellido </th>
                    <th>carne</th>
                    <th>Nota de examen</th>
                    </thead>
                    <tbody>
                    @foreach ($datos as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->apellido }}</td>
                            <td>{{ $item->carne }}</td>
                            <td>{{ $item->nota_examen }}</td>
                            <td>
                                <form action="{{ route("registro.edit", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("registro.show", $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>

            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{ $registro->links() }}
                </div>
            </div>
            </p>
        </div>
    </div>

@endsection
