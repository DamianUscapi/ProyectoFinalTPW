@extends('homeAdmin')
@section('plantillaAdmin')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('categoria.create')}}">CREAR NUEVA CATEGORIA</a>
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
                                    <td>CATEGORIA</td>
                                    <td>NOMBRES</td>
                                    <td>DESCRIPCION</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $categoria)
                                    <tr>
                                        <td>{{$categoria->id}}</td>
                                    <td><a class="text-light" href="{{route ('categoria.show' , $categoria->id)}}">{{$categoria->nombre}}</a></td>
                                        <td>{{$categoria->descripcion}}</td>
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
