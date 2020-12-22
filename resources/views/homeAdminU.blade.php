
@extends('homeAdmin')
@section('plantillaAdmin')
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img class="w-100" src="{{asset('img/tortas.png')}}">
                    </div>
                    <div class="card-footer text-muted">
                        <a class="nav-link" href="{{ route('producto.listado')}}">Productos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img class="w-100" src="{{asset('img/categoria.png')}}">
                    </div>
                    <div class="card-footer text-muted">
                        <a class="nav-link" href="{{ route('categoria.listado')}}">Categoria</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
