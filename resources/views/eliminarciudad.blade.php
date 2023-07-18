@extends('plantilla')

@section('seccion')

<div class="card">
  <h5 class="card-header">Eliminar Ciudad</h5>
  <div class="card-body">

    <p class="card-text">   
  
    <div class="alert alert-danger" role="alert">
        Estas seguro de eliminar este registro!!
    <table class="table table-sm table-hover">
    <thead>
        <th>Nombre</th>
    </thead>
    <tbody>
    <tr>
        <td>{{ $ciudad->nombre }}</td>
       
    </tr>
    </tbody>
    
    </table>

<hr>
        <form action="{{ route('ciudad.destroy', $ciudad->id_ciudad) }}" method="POST">
        @csrf
        @method('DELETE')

        <a href="{{ route('ciudad.index') }}" class="btn btn-info">
        <span class="fas fa-undo-alt"></span>Regresar
        </a>
            <button class="btn btn-danger">
            <span class="fas fa-user-times"></span>Eliminar</button>
            
        </form>


    </div>
    
     </p>

  </div>
</div>

@endsection