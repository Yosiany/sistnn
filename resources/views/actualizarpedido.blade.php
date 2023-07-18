@extends('plantilla')

@section('seccion')

<div class="card">
  <div class="card-body">



    <h5 class="card-header"> Actualizar pedido</h5>
    <a href="a" class="btn btn-primary"> Actualizar Nueva pedido</a>

    <p class="class-text">
        <form action="{{ route('pedido.update', $pedido->id_pedido) }}" method="POST">   

        @csrf
        @method("PUT")

        <label for="">Cantidad</label>
        <input type="text" name="cantidad" class="form-control" Required value="{{$pedido->cantidad}}">
        <label for="">Fecha de pedido</label>
        <input type="date" name="fec_pedido" class="form-control" Required value="{{$pedido->fec_pedido}}">
        <label for="">Id del producto</label>
        <input type="text" name="id_producto" class="form-control" Required value="{{$pedido->id_producto}}">
        <label for="">Id de ciudad</label>
        <input type="text" name="id_ciudad" class="form-control" Required value="{{$pedido->id_ciudad}}">

        <button class="btn btn-warning">Actualizar</button>
      <a href="{{ route('pedido.index') }}">
        <span class="fas fa-undo-alt"></span>
      Regresar
      </a>

        </form>
    </p>


  </div>
</div>

@endsection