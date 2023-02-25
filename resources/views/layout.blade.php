<!-- Stored in resources/views/layouts/layout.blade.php -->
<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    Texto de la vista principal
@show
<div class="container">
    @yield('content')
</div>
</body>
</html>
