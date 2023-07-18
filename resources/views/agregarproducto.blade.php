@extends('plantilla')

@section("titulopagina", "crear un nuevo registro")

@section('seccion')

<div class="card">
<h5 class="card-header">Agregar Nueva producto</h5>
  <div class="card-body">
  
    <p class="card-text">   
    <form action="{{ route('producto.store') }}" method="POST">       

    @csrf 

        <label for="">Nombre</label>
        <input type="text" name="nombre_producto" class="form-control" Required>
        <label for="">Formato</label>
        <input type="text" name="formato_producto" class="form-control" Required>
        <label for="">Precio</label>
        <input type="text" name="precio" class="form-control" Required>
        <label for="">Sabor Producto</label>
        <input type="text" name="sabor_producto" class="form-control" Required>
        <br>
        <button class="btn btn-primary">Agregar</button>
        <a href="{{ route('producto.index') }}">
        <span class="fas fa-undo-alt"></span>
        Regresar
        </a>
        </form>
    </p>


  </div>
</div>

@endsection