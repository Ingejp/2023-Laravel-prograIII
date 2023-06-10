@extends('layout')
@section('content')

    <form class="p-3 bg-white mb-3">
        @csrf
        @method('POST')
        <h2>Formulario Examen final</h2>
        <br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" class="form-control" value="{{old('name')}}" name="name" id="exampleFormControlInput1" placeholder="Nombre">
            {{--{{$errors->first('name')}}--}}
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Apellido</label>
            <input type="text" class="form-control" value="{{old('address')}}" name="address" id="exampleFormControlInput1" placeholder="Apellido">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Carne</label>
            <input type="text" class="form-control" value="{{old('phone_number')}}" name="phone_number" id="exampleFormControlInput1" placeholder="Carne">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota examen Final</label>
            <input type="text" class="form-control" value="{{old('phone_number')}}" name="phone_number" id="exampleFormControlInput1" placeholder="NotaExamenFinal">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
            <a href="{{url('/')}}" class="btn btn-danger">Cancelar <i class="fas fa-arrow-alt-circle-left"></i></a>
        </div>

@endsection

