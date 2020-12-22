<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
            <div class="container-xl">
                <a class="navbar-brand hidden-lg-up " href="{{route('home')}}"><img src="{{asset('img/logo/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL"
                    aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample07XL">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-toggle="dropdown"
                                aria-expanded="false">Productos</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07XL">
                                <a class="dropdown-item" href="{{route('home.tortas')}}">Tortas</a>
                                <a class="dropdown-item" href="{{route('home.panes')}}">Panes</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.nosotros')}}">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.contactos')}}">Contáctanos</a>
                        </li>
                        <!--ruta para entrar => public/usuarios/login   -->
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('validor') }}">
                                    {{Auth::user()->name}}
                                    </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                        <!--Crud Administrador -->
                    </ul>
                    <!-- <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('producto.listado')}}">poductos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuario.create')}}">usuarios</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('categoria.listado')}}">categorias</a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
<!-- <script src="asset('js/jquery-3.5.1.min.js')"></script> -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/skrin.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(".owl-carousel").owlCarousel({
            margin: 20,
            loop: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            smartSpeed: 750,
            nav:false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                470: {
                    items: 2,
                    nav: false
                },
                700: {
                    items: 3,
                    nav: false
                },
                1100: {
                    items: 4,
                    nav: false
                },
                1400: {
                    items: 5,
                    nav: false
                }
            }
        });
    </script>
    <script>
        $('#modalComprar').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var ruta = button.data('ruta')
            var rutawhatsapp = button.data('rutawhatsapp')
            var nombre = button.data('nombre')
            var descripcion = button.data('descripcion')
            var precio = button.data('precio')
            var tipo = button.data('tipo')


            var modal = $(this)
            modal.find('.modal-title').text('titulo ' + nombre)
            //modal.find('.modal-body input').val(recipient)
           // modal.find('.modal-body label').val(nombre)
            modal.find('.modal-body .nombre').text(nombre)
            modal.find('.modal-body #rutaImg').html(ruta)
            modal.find('.modal-body .contactWhatsTyP').html(rutawhatsapp)
            modal.find('.modal-body .text5').text(descripcion)
            modal.find('.modal-body .precio').text('S/. '+precio)
            modal.find('.modal-body .tipoProd').text(tipo)

        });

    </script>
    <section class="footer">
        <div class="row">
            <div class="col-md-12 ml-auto">
                <p>Derechos Reservados por @HappyDays 2021</p>
            </div>
        </div>
    </section>
</body>
</html>
