@extends('plantilla')

@section("titulopagina", "crear un nuevo registro")

@section('seccion')

<div class="card">
<h5 class="card-header">Agregar Nueva pedido</h5>
  <div class="card-body">
  
    <p class="card-text">   
    <form action="{{ route('pedido.store') }}" method="POST">       

    @csrf 

        <label for="">Cantidad en cajas</label>
        <input type="text" name="cantidad" class="form-control" Required>
        <label for="">Fecha de pedido</label>
        <input type="date" name="fec_pedido" class="form-control" Required>
        <label for="">Id del producto</label>
        <input type="text" name="id_producto" class="form-control" Required>
        <label for="">Id de ciudad</label>
        <input type="text" name="id_ciudad" class="form-control" Required>
        <br>
        <button class="btn btn-primary">Agregar</button>
        <a href="{{ route('pedido.index') }}">
        <span class="fas fa-undo-alt"></span>
        Regresar
        </a>
        </form>
    </p>


  </div>
</div>

@endsection