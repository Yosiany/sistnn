@extends('plantilla')

@section('seccion')

<div class="card">
  <div class="card-body">



    <h5 class="card-header"> Actualizar producto</h5>
    <a href="a" class="btn btn-primary"> Actualizar Nueva producto</a>

    <p class="class-text">
        <form action="{{ route('producto.update', $producto->id_producto) }}" method="POST">   

        @csrf
        @method("PUT")

        <label for="">Nombre del producto</label>
        <input type="text" name="nombre_producto" class="form-control" Required value="{{$producto->nombre_producto}}">
        <label for="">Formato en Gr</label>
        <input type="text" name="formato_producto" class="form-control" Required value="{{$producto->formato_producto}}">
        <label for="">Producto</label>
        <input type="text" name="precio" class="form-control" Required value="{{$producto->precio}}">
        <label for="">Sabor</label>
        <input type="text" name="sabor_producto" class="form-control" Required value="{{$producto->sabor_producto}}">
<hr>
        <button class="btn btn-warning">Actualizar</button>
      <a href="{{ route('producto.index') }}">
        <span class="fas fa-undo-alt"></span>
      Regresar
      </a>

        </form>
    </p>


  </div>
</div>

@endsection