@extends('plantilla')

@section("titulopagina", "crear un nuevo registro")

@section('seccion')

<div class="card">
<h5 class="card-header">Agregar Nueva vencimiento</h5>
  <div class="card-body">
  
    <p class="card-text">   
    <form action="{{ route('vencimiento.store') }}" method="POST">       

    @csrf 

        <label for="">Cantidad</label>
        <input type="text" name="cantidad" class="form-control" Required>
        <label for="">Fecha de vencimiento</label>
        <input type="date" name="fec_vencimiento" class="form-control" Required>
        <label for="">Detalle</label>
        <input type="text" name="detalle" class="form-control" Required>
        <label for="">Id del Producto</label>
        <input type="text" name="id_producto" class="form-control" Required>
        <label for="">Id de la ciudad</label>
        <input type="text" name="id_ciudad" class="form-control" Required>
        <br>
        <button class="btn btn-primary">Agregar</button>
        <a href="{{ route('vencimiento.index') }}">
        <span class="fas fa-undo-alt"></span>
        Regresar
        </a>
        </form>
    </p>


  </div>
</div>

@endsection