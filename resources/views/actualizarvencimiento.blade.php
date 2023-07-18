@extends('plantilla')

@section('seccion')

<div class="card">
  <div class="card-body">



    <h5 class="card-header"> Actualizar fecha de vencimiento de producto</h5>
    

    <p class="class-text">
        <form action="{{ route('vencimiento.update', $vencimiento->id_fecven) }}" method="POST">   

        @csrf
        @method("PUT")

        <label for="">Cantidad en Cajas</label>
        <input type="text" name="cantidad" class="form-control" Required value="{{$vencimiento->cantidad}}">
        <label for="">Fecha de vencimiento</label>
        <input type="date" name="fec_vencimiento" class="form-control" Required value="{{$vencimiento->fec_vencimiento}}">
        <label for="">Detalle y observaciones del producto</label>
        <input type="text" name="detalle" class="form-control" Required value="{{$vencimiento->detalle}}">
        <label for="">Id del producto</label>
        <input type="text" name="id_producto" class="form-control" Required value="{{$vencimiento->id_producto}}">  
        <label for="">Codigo de la ciudad {{$vencimiento->ciudad->nombre}}</label>
        <input type="text" name="id_ciudad" class="form-control" Required value="{{$vencimiento->id_ciudad}}">  
       

<hr>
        <button class="btn btn-warning">Actualizar</button>
      <a href="{{ route('vencimiento.index') }}">
        <span class="fas fa-undo-alt"></span>
      Regresar
      </a>

        </form>
    </p>


  </div>
</div>

@endsection