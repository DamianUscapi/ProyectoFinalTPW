@extends('homeAdmin')
@section('plantillaAdmin')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('producto.create')}}">CREAR NUEVA PRODUCTO</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-dark">
                            <thead>
                                <tr class="font-weight-bold">
                                    <td>PRODUCTO</td>
                                    <td>NOMBRE</td>
                                    <td>DESCRIPCION</td>
                                    <td>CANTIDAD</td>
                                    <td>PRECIO</td>
                                    <td>CATEGORIA</td>
                                    <td>IMAGEN</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td>{{$producto->id}}</td>
                                    <td><a class="text-light" href="{{route ('producto.view' , $producto->id)}}">{{$producto->nombre}}</a></td>
                                        <td>{{$producto->descripcion}}</td>
                                        <td>{{$producto->cantidad}}</td>
                                        <td>{{$producto->precio}}</td>
                                        <td>{{$producto->categoria}}</td>
                                        <td>{{$producto->ruta}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
