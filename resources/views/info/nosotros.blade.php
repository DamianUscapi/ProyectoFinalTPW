@extends('layouts.plantilla')

@section('title', 'Nosotros')

@section('content')
<style>
    #overviews img{
        border-radius: 1em;
    }
    .section-title h5{
        padding: 1em;
        border-radius:1em;
        box-shadow: 0px 5px 5px #888888;
    }
    #mision h5{
        padding: 1em;
        border-radius:1em;
        box-shadow: -5px 7px 5px #888888;
    }
    #vision h5{
        padding: 1em;
        border-radius:1em;
        box-shadow: 5px 7px 5px #888888;
    }
    #valores h5{
        padding: 1em;
        border-radius:1em;
        box-shadow: -5px 7px 5px #888888;
    }

</style>
<div class="container" style="padding:4em;">
    <div id="overviews" class="section wb">
        <div class="row">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <img src="{{asset('img/info/nosotros/happy2.png')}}" alt="" class="img-fluid img-rounded">
                    <h5>Nuestra pasión no sólo es el dulce, sino trabajar, inventar y compartir contigo; si lo pides lo creamos, Nuestra inspiración eres tú, y el motor es la fe que tenemos en nuestros colaboradores, ambos hacen de este sueño un libro lleno de historias y de retos aún por cumplir. Te esperamos aquí en Happy Days, tu segundo hogar.</h5>
                </div>
            </div><br><br><br>
            <hr>
            <div class="row align-items-center" id="mision">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2><center> Misión </center></h2>
                        <h5> Somos una empresa cuya misión es ofrecer productos de panadería y repostería en general de la más alta calidad con un excelente sabor y aun precio accesible.
                            Establecer un liderazgo con la colaboración y creatividad de nuestro talento  humano, utilizando las mejores materias primas del mercado para satisfacer a nuestros clientes.</h5>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="{{asset('img/info/nosotros/misi.jpg')}}" alt="" class="img-fluid img-rounded">
                    </div>
                </div>
            </div><br><br><br>
            <hr>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="{{asset('img/info/nosotros/visi.jpg')}}" alt="" class="img-fluid img-rounded">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box" id='vision'>
                        <h2><center> Visión </center></h2>
                        <h5>Ser una empresa líder en el negocio de  panadería y repostería reconocida en la zona norte del país. Destacarnos por la calidad y sabor de nuestros productos, atención y servicio al cliente.
                        Utilizando los más altos estándares de calidad y tecnología de vanguardia en nuestros procesos productivos.</h5>

                    </div>
                </div>

            </div><br><br><br>
            <hr>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box" id="valores">
                        <h2><center> Valores </center></h2>
                        <h5>Happy Days es una empresa preocupada por satisfacer las necesidades de sus clientes por lo cual se considera necesario que exista un ambiente con los siguientes valores :
                            <ul>
                                <li>Responsabilidad</li>
                                <li>Respeto</li>
                                <li>Pasion por la calidad</li>
                                <li>Innovación</li>
                              </ol>
                            </ul>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="{{asset('img/info/nosotros/valo.jpg')}}" alt="" class="img-fluid img-rounded">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
