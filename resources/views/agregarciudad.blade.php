@extends('plantilla')

@section("titulopagina", "crear un nuevo registro")

@section('seccion')

<div class="card">
<h5 class="card-header">Agregar Nueva Ciudad</h5>
  <div class="card-body">
  
    <p class="card-text">   
    <form action="{{ route('ciudad.store') }}" method="POST">       

    @csrf 

        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control" Required>
        <br>
        <button class="btn btn-primary">Agregar</button>
        <a href="{{ route('ciudad.index') }}">
        <span class="fas fa-undo-alt"></span>
        Regresar
        </a>
        </form>
    </p>


  </div>
</div>

@endsection