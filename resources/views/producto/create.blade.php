
@extends('homeAdmin')
@section('plantillaAdmin')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="text-dark">CREAR PRODUCTO</h3>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <form action="{{route('producto.saveP')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="">NOMBRE DE PRODUCTO</label>
                    <input type="text" name="nombre" id="" value="{{old('nombre')}}" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('nombre')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">DESCRIPCION</label>
                    <input type="text" name="descripcion" value="{{old('descripcion')}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('descripcion')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">CANTIDAD</label>
                    <input type="text" name="cantidad" value="{{old('cantidad')}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('cantidad')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">PRECIO</label>
                    <input type="text" name="precio" value="{{old('precio')}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('precio')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">CATEGORIA</label>
                    <input type="text" name="categoria" value="{{old('categoria')}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('categoria')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">sube una imagen</label>
                    <input type="file" name="ruta" aria-describedby="helpId">
                    <br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="{{route('producto.listado')}}"> < REGRESAR</a>
                        <button type="submit" name="" id="" class="btn btn-primary" btn-lg btn-block">enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
@endsection
