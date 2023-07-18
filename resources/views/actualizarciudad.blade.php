@extends('plantilla')

@section('seccion')

<div class="card">
  <div class="card-body">



    <h5 class="card-header"> Actualizar Ciudad</h5>
    <a href="a" class="btn btn-primary"> Actualizar Nueva ciudad</a>

    <p class="class-text">
        <form action="{{ route('ciudad.update', $ciudad->id_ciudad) }}" method="POST">   

        @csrf
        @method("PUT")

        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control" Required value="{{$ciudad->nombre}}">

        <button class="btn btn-warning">Actualizar</button>
      <a href="{{ route('ciudad.index') }}">
        <span class="fas fa-undo-alt"></span>
      Regresar
      </a>

        </form>
    </p>


  </div>
</div>

@endsection