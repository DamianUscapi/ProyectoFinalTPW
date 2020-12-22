
@extends('homeAdmin')
@section('plantillaAdmin')
<br>
    <div class="container border">
        <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="text-dark">EDITAR CATEGORIA</h3>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <form action="{{route('categoria.editC',$categoria)}}" method="post">
                    @csrf
                    @method('put')
                    <label for="">ACTUALIZAR NOMBRE DE CATEGORIA</label>
                    <input type="text" name="nombre" id="" value="{{old('nombre',$categoria->nombre)}}" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('nombre')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">ACTUALIZAR DESCRIPCION DE CATEGORIA</label>
                    <input type="text" name="descripcion" value="{{old('descripcion',$categoria->descripcion)}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('descripcion')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="{{route('categoria.listado')}}"> < REGRESAR</a>
                        <button type="submit" name="" id="" class="btn btn-primary" btn-lg btn-block">GUARDAR</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <br>
@endsection
