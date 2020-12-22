@extends('homeAdmin')
@section('plantillaAdmin')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('producto.eliminar',$producto)}}" method="post">
                            <a class="btn btn-primary" href="{{route('producto.listado')}}"> < REGRESAR</a>
                            <a class="btn btn-primary" href="{{route('producto.edit',$producto)}}">EDITAR PRODUCTO</a>
                            @csrf
                            @method('delete')
                            <button class="btn btn-primary" type="submit">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h1>producto {{$producto->nombre}}</h1>
        <br>
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
                                <tr>
                                    <td>{{$producto->id}}</td>
                                    <td>{{$producto->nombre}}</td>
                                    <td>{{$producto->descripcion}}</td>
                                    <td>{{$producto->cantidad}}</td>
                                    <td>{{$producto->precio}}</td>
                                    <td>{{$producto->categoria}}</td>
                                    <td>{{$producto->ruta}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 offset-md-4 text-center" >
                <div class="card imgMuestra" style=" width:18rem; height: 15rem;">
                    <div class="card-body" >
                        <img src="../imgP/{{$producto->ruta}}" style="position: absolute;
                        top: 0;
                        left: 0;
                        width: 18rem;
                        height: 15rem;
                        background-size: auto;
                        background-position: center;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
