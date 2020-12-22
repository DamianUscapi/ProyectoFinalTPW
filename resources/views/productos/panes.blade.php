@extends('layouts.plantilla')

@section('title', 'Panes')

@section('content')

<section id="cardProducto">
    <div class="titulo" style="padding-top:3rem;">
        <h2>Panes</h2><hr style="width: 50rem; height:3px; ">
    </div>
    <div class="wrapper">
        <div class="carouselProd ">
            <div class="row row-cols-4 text-center">
                @foreach ($productos as $producto)
                    @if($producto->categoria==2)
                    <div class="card">
                        <img src="../imgP/{{$producto->ruta}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p style="font-size: 1.3rem;">{{$producto->nombre}}</p>
                            <h5 class="card-title">S/{{$producto->precio}}</h5>
                            <!-- <a href="#" class="btn btn-primary">Comprar</a> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalComprar"
                            data-nombre="{{$producto->nombre}}"
                            data-ruta=' <img src="../imgP/{{$producto->ruta}}" class="card-img-top" alt="..." style="height: 13em; width:10em;">'
                            data-descripcion="{{$producto->descripcion}}"
                            data-precio="{{$producto->precio}}"
                            data-tipo="PANES"
                            >Detalles2</button>

                        </div>
                    </div>
                    @endif

                @endforeach
            </div>
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
                                <img src="../imgP/{{$producto->ruta}}" class="imagenRutaImg" alt="..." >
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
</section><br><br><br>

@endsection

