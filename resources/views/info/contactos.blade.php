@extends('layouts.plantilla')

@section('title', 'Contactos')

@section('content')

<section class="form_wrap">

    <section class="cantact_info">
        <section class="info_title">
            <span class="fa fa-user-circle"></span>
            <h2>INFORMACIÓN<br>DE CONTACTO</h2>
        </section>
        <section class="info_items">
            <p><span class="fa fa-envelope"></span> happydays@gmail.com</p>
            <p><span class="fa fa-mobile"></span> +1(123) 444-5555</p>
        </section>
    </section>

    <form action="" class="form_contact">
        <h2>Envíanos un mensaje</h2>
        <div class="user_info">
            <label for="names">Nombres *</label>
            <input type="text" id="names">

            <label for="phone">Teléfono / Celular</label>
            <input type="text" id="phone">

            <label for="email">Correo electrónico *</label>
            <input type="text" id="email">

            <label for="mensaje">Mensaje *</label>
            <textarea id="mensaje"></textarea>

            <input type="button" value="Enviar Mensaje" id="btnSend">
        </div>
    </form>

</section>

<section class="form_wrap">

    <section class="cantact_info">
        <section class="info_title">
            <h2>Ubícanos</h2>
        </section>
        <section class="info_items">
            <p>en:</p>
        </section>
    </section>

    <form action="" class="form_contact">
        <div class="user_info">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2346.311444619092!2d-71.89767077973772!3d-13.548338749268485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916e7ee4f31a30f9%3A0xdd8525a52624c542!2sMAS%20VIDA%20CUSCO!5e1!3m2!1ses!2spe!4v1606191450887!5m2!1ses!2spe" width="580" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </form>

</section>
@endsection
