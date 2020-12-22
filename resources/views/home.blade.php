
@extends('layouts.plantilla')
@section('title', 'Home')
@section('content')

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/strawberry-cake.jpg" alt=""/>
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>!fiesta Dulce!</h1>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Pedir</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/cake.jpg" alt="" />
            <div class="container">
                <div class="carousel-caption">
                    <h1>!fiesta Dulce!</h1>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Pedir</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/muffins-18.jpg" alt="" />
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1>!fiesta Dulce!</h1>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Pedir</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- carousel de productos -->
<div class="titulo">
    <h2>Productos destacados</h2><hr>
</div>
<div class="wrapper">
    <div class="carouselProd  owl-carousel owl-theme">

        <div class="card">
            <img src="img/tortas/912797.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p>Bandeja de dulces</p>
                <h5 class="card-title">S/9,80</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
        <div class="card">
            <img src="img/tortas/blur-18.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p>Bandeja de dulces</p>
                <h5 class="card-title">S/9,80</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
        <div class="card">
            <img src="img/tortas/frontal-2577.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p>Bandeja de dulces</p>
                <h5 class="card-title">S/9,80</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
        <div class="card">
            <img src="img/tortas/torta-de-lucuma.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p>Bandeja de dulces</p>
                <h5 class="card-title">S/9,80</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>


        <div class="card">
            <img src="img/tortas/912797.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p>Bandeja de dulces</p>
                <h5 class="card-title">S/9,80</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
        <div class="card">
            <img src="img/tortas/912797.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p>Bandeja de dulces</p>
                <h5 class="card-title">S/9,80</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<!-- carousel de productos BD tortas-->

<section id="cardProducto">
    <div class="titulo">
        <h2>Tortas</h2><hr>
    </div>
    <div class="wrapper">
        <div class="carouselProd  owl-carousel owl-theme">
        @foreach ($productos as $producto)
            @if($producto->categoria==1)
            <div class="card">
                <img src="imgP/{{$producto->ruta}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p style="font-size: 1.3rem;">{{$producto->nombre}}</p>
                    <h5 class="card-title">S/{{$producto->precio}}</h5>
                    <!-- <a href="#" class="btn btn-primary">Comprar</a> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalComprar"
                     data-nombre="{{$producto->nombre}}"
                     data-ruta=' <img src="imgP/{{$producto->ruta}}" class="card-img-top" alt="..." style="height: 13em; width:10em;">'
                     data-rutawhatsapp='<a href="https://api.whatsapp.com/send?phone=51913659658&text=Hola%21%20Quisiera%20más%20información%20sobre%20el%20producto%20{{$producto->nombre}}" class="float" target="_blank">
                        <i class="fa fa-whatsapp my-float"></i></a>'
                     data-descripcion="{{$producto->descripcion}}"
                     data-precio="{{$producto->precio}}"
                     data-tipo="TORTAS"
                     >Detalles</button>

                </div>
            </div>
            @endif

        @endforeach
        </div>
    </div>
    <div class="modal fade" id="modalComprar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ml-auto" id="rutaImg">
                                <img src="imgP/{{$producto->ruta}}" class="imagenRutaImg" alt="..." >
                            </div>
                            <div class="col-md-6 ml-auto shoe-content">
                                <div class="contenidoTexto">
                                    <div class="text1">
                                        <span class="tipoProd">TORTAS</span>
                                        <span>INCLUYE DECORACIÓN</span>
                                      </div>
                                      <div class="text2">
                                        <h5 class="precio"></h5>
                                      </div>
                                      <div class="text3">
                                        <h5 class="nombre"></h5>
                                      </div>
                                      <div class="text4">
                                        DESCRIPCIÓN
                                      </div>
                                      <div class="text5">
                                        <p class="descripcion"></p>
                                      </div>
                                      <!-- BOTON CARRITO -->
                                      <div class="btn-wrapper">
                                        <span  class="contactWhatsTyP">
                                            <a href='https://api.whatsapp.com/send?phone=51913659658&text=Hola%21%20Quisiera%20más%20información%20sobre%20el%20producto%20<?php $mensage="Tortas";echo $mensage;?>' class="float" target="_blank">
                                                <i class="fa fa-whatsapp my-float"></i>
                                            </a>
                                        </span>
                                        <span class="btn">COMPRAR</span>
                                        <span class="qantity">
                                          <div style="padding-left: 1em">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                              </svg>
                                            <span class="one">1</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                              </svg>
                                          </div>
                                          <div class="quantity-text" style="padding-left: 1em" >CANTIDAD</div>
                                        </span>
                                        <div class="social-icons">
                                          <i class="fab fa-twitter"></i>
                                          <i class="fab fa-pinterest-p"></i>
                                          <i class="fab fa-facebook-f"></i>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- carousel de productos BD panes -->
<br>
<br>
<br>
<section id="cardProducto">
    <div class="titulo">
        <h2>Panes</h2><hr>
    </div>
    <div class="wrapper">
        <div class="carouselProd  owl-carousel owl-theme">
            @foreach ($productos as $producto)
            @if($producto->categoria==2)
            <div class="card">
                <img src="imgP/{{$producto->ruta}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p style="font-size: 1.3rem;">{{$producto->nombre}}</p>
                    <h5 class="card-title">S/{{$producto->precio}}</h5>
                    <!-- <a href="#" class="btn btn-primary">Comprar</a> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalComprar"
                     data-nombre="{{$producto->nombre}}"
                     data-ruta=' <img src="imgP/{{$producto->ruta}}" class="card-img-top" alt="..." style="height: 13em; width:10em;">'
                     data-rutawhatsapp='<a href="https://api.whatsapp.com/send?phone=51913659658&text=Hola%21%20Quisiera%20más%20información%20sobre%20el%20producto%20{{$producto->nombre}}" class="float" target="_blank">
                        <i class="fa fa-whatsapp my-float"></i></a>'
                     data-descripcion="{{$producto->descripcion}}"
                     data-precio="{{$producto->precio}}"
                     data-tipo="PANES"
                     >Detalles</button>

                </div>
            </div>
            @endif

        @endforeach
        </div>
    </div>
    <div class="modal fade" id="modalComprar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ml-auto" id="rutaImg">
                                <img src="imgP/{{$producto->ruta}}" class="imagenRutaImg" alt="..." >
                            </div>
                            <div class="col-md-6 ml-auto shoe-content">
                                <div class="contenidoTexto">
                                    <div class="text1">
                                        <span class="tipoProd">PANES</span>
                                        <span>SIN DECORACIÓN</span>
                                      </div>
                                      <div class="text2">
                                        <h5 class="precio"></h5>
                                      </div>
                                      <div class="text3">
                                        <h5 class="nombre"></h5>
                                      </div>
                                      <div class="text4">
                                        DESCRIPCIÓN
                                      </div>
                                      <div class="text5">
                                        <p class="descripcion"></p>
                                      </div>
                                      <!-- BOTON CARRITO -->
                                      <div class="btn-wrapper">
                                        <span  class="contactWhatsTyP">
                                            <a href='https://api.whatsapp.com/send?phone=51913659658&text=Hola%21%20Quisiera%20más%20información%20sobre%20el%20producto%20<?php $mensage="Panes";echo $mensage;?>' class="float" target="_blank">
                                                <i class="fa fa-whatsapp my-float"></i>
                                            </a>
                                        </span>
                                        <span class="btn">COMPRAR</span>
                                        <span class="qantity">
                                          <div style="padding-left: 1em">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                              </svg>
                                            <span class="one">1</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                              </svg>
                                          </div>
                                          <div class="quantity-text" style="padding-left: 1em" >CANTIDAD</div>
                                        </span>
                                        <div class="social-icons">
                                          <i class="fab fa-twitter"></i>
                                          <i class="fab fa-pinterest-p"></i>
                                          <i class="fab fa-facebook-f"></i>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contactWhats">
    <a href='https://api.whatsapp.com/send?phone=51913659658&text=Hola%21%20Quisiera%20más%20información%20sobre%20los%20productos%20<?php //$mensage="holasa";echo $mensage;?>' class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
</section>
<br>
<br>


@endsection

