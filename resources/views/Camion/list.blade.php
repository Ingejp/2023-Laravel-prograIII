@extends('layout')

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(\Session::has('warning'))
        <div class="alert alert-warning">
            <ul>
                <li>{!! \Session::get('warning') !!}</li>
            </ul>
        </div>
    @endif
    <div class="p-3 bg-white mb-3">
        <h3>Lista de Camiones</h3>
        <div class="input-group mb-3">
            <a href="{{route('camion.register')}}" class="btn btn-success ml-5" > Nuevo <i class="fas fa-plus"></i></a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DIRECCIÓN</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($camiones as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->placa_camion}}</td>
                        <td>{{$item->marca}}</td>
                        <td>{{$item->color}}</td>
                        <td>{{$item->modelo}}</td>
                        <td>{{$item->transporte->nombre}}</td>
                        <td >
                            <a href="{{$item->id}}" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td >
                            <a href="{{route('camion.delete', $item->id )}}" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $camiones->links() }}
        </div>
    </div>
@endsection
