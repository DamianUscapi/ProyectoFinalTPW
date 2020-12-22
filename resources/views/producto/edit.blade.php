

@extends('homeAdmin')
@section('plantillaAdmin')
<br>
    <div class="container border">
        <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="text-dark">EDITAR PRODUCTO</h3>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <form action="{{route('producto.editU',$producto)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <label for="">ACTUALIZAR NOMBRE DE PRODUCTO</label>
                    <input type="text" name="nombre" id="" value="{{old('nombre',$producto->nombre)}}" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('nombre')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">ACTUALIZAR DESCRIPCION DE PRODUCTO</label>
                    <input type="text" name="descripcion" value="{{old('descripcion',$producto->descripcion)}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('descripcion')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">ACTUALIZAR CANTIDAD DE PRODUCTO</label>
                    <input type="text" name="cantidad" value="{{old('cantidad',$producto->cantidad)}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('cantidad')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">ACTUALIZAR PRECIO DE PRODUCTO</label>
                    <input type="text" name="precio" value="{{old('precio',$producto->precio)}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('precio')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">ACTUALIZAR CATEGORIA DE PRODUCTO</label>
                    <input type="text" name="categoria" value="{{old('categoria',$producto->categoria)}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    @error('categoria')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="{{route('producto.listado')}}"> < REGRESAR</a>
                        <button type="submit" name="" id="" class="btn btn-primary" btn-lg btn-block">enviar</button>
                    </div>
                    <br>
                    <label for="">sube una imagen</label>
                    <input type="file" value="{{old('ruta',$producto->ruta)}}" name="ruta" aria-describedby="helpId">
                </form>
            </div>
        </div>
    </div>
    <br>
@endsection
