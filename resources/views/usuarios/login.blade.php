@extends('homeUser')
@section('plantillaUser')
    <div class="container">
        <br>
        <div class="row border">
            <div class="col-md-6 text-center form"><br><br>
                <h3>LOGIN</h3>
                <svg width="7em" height="7em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                </svg>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">E-MAIL</label>
                        <input type="email" name="correo" class="form-control" placeholder="" aria-describedby="helpId">
                        <br>
                        <label for="">PASSWORD</label>
                        <input type="text" name="correo" class="form-control" placeholder="" aria-describedby="helpId">
                        <br>
                        <button type="submit" name="" id="" class="btn btn-primary" btn-lg btn-block">LOGIN</button>
                    </div>
                </form>
                aun no tienes una cuenta ? <a href="{{route('usuario.create')}}">crear cuenta</a>
                <br>
                <br>
            </div>
            <br>
            <div class="col-md-6 img">
                <img src="{{asset('img/happy.png')}}">
            </div>
        </div>
    </div>
@endsection