
<html>
<head>
    <title>App Name -</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<div class="card">
    <h5 class="card-header">Agregar nueva persona</h5>
    <div class="card-body">

        <p class="card-text">
{{--        <form action="{{ route('predios.storep') }}" method="POST">--}}
{{--            @csrf--}}
            <label for="">Nombre</label>
            <input type="text" value="Josue David" name="id" class="form-control" required>
            <label for="">Apellido</label>
            <input type="text" name="nombre_predio"  value="Garcia Arango" class="form-control" required>
            <label for="">Carne</label>
            <input type="text" name="direccion" class="form-control" value="0909-21-11375" required>
            <label for="">Nota Examen Final</label>
            <input type="text" name="direccion" class="form-control" value="35" required>

            <br>
{{--            <a href="{{ route("predios.indexp") }}" class="btn btn-info">--}}
                <span class="fas fa-undo-alt"></span> Regresar
            </a>
            <button class="btn btn-primary">
                <span class="fas fa-user-plus"></span>Agregar
            </button>

        </form>

        </p>

    </div>
</div>

</body>
</html>
