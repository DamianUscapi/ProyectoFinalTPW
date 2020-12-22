@extends('homeAdmin')
@section('plantillaAdmin')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('categoria.eliminar',$categoria)}}" method="post">
                            <a class="btn btn-primary" href="{{route('categoria.listado')}}"> < REGRESAR</a>
                            <a class="btn btn-primary" href="{{route('categoria.edit',$categoria)}}">EDITAR CATEGORIA</a>
                            @csrf
                            @method('delete')
                            <button class="btn btn-primary" type="submit">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h1>categoria {{$categoria->nombre}}</h1>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-dark">
                            <thead>
                                <tr class="font-weight-bold">
                                    <td>CATEGORIA</td>
                                    <td>NOMBRES</td>
                                    <td>DESCRIPCION</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$categoria->id}}</td>
                                    <td>{{$categoria->nombre}}</td>
                                    <td>{{$categoria->descripcion}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
