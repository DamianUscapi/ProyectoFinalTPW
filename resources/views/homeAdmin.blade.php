<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <!--<a class="navbar-brand" href="">reposteria</a>-->
        <a class="navbar-brand" href="{{ route('validor') }}">reposteria</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('producto.listado')}}">PRODUCTOS</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('categoria.listado')}}">CATEGORIAS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">SALIR</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('plantillaAdmin')
<!--script-->
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
