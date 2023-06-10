<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <title>@yield('tituloPagina')</title>
</head>
<body>

<div class="container">
    <br><br>
    @yield('contenido')
</div>
<div class="container">
    <br>
    @yield('contenidot')
</div>
<div class="container">
    <br>
    @yield('contenidoc')
</div>

<div class="container">
    <h1>Formulario</h1>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Código</th>
            <th>Edad</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Christian</td>
            <td>Aldana</td>
            <td>0909-21-697</td>
            <td>20</td>
        </tr>
        </tbody>
    </table>

    <a href="{{ route('home') }}" class="btn btn-primary">
        <span class="fas fa-home"></span> Regresar al Home
    </a>
</div>

<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->

<script src="{{asset('js/app.js')}}"></script>

@yield('js')
{{--//definiendo un container es decir un espacio dentro de la aplicacion js--}}

</body>
</html>
