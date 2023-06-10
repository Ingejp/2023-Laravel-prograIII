@extends('layout')

@section('BryanMartinez', 'Examen final Bryan Martinez')

@section('sidebar')
    <p>Examen final de Bryan Martinez 0909-20-6903.</p>
@endsection

@section('content')

    <br><br>

    <form>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Bryan ">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Apelllido</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Martinez">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Carné</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="0909-20-6903">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nota_Examen_final</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="20/20">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>

    </form>


@endsection
