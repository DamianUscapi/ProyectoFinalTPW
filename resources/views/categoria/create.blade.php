
@extends('homeAdmin')
@section('plantillaAdmin')
<br>
    <div class="container border">
        <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="text-dark">CREAR CATEGORIA</h3>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <form action="{{route('categoria.saveC')}}" method="post">
                    @csrf
                    <label for="">NOMBRE DE CATEGORIA</label>
                    <input type="text" name="nombre" id="" value="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('nombre')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">DESCRIPCION</label>
                    <input type="text" name="descripcion" value="" id="" class="form-control" placeholder="" aria-describedby="helpId">
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
