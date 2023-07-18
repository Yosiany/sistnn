@extends('plantilla')

@section('seccion')

<div class="card">
  <h5 class="card-header">Eliminar vencimiento</h5>
  <div class="card-body">

    <p class="card-text">   
  
    <div class="alert alert-danger" role="alert">
        Estas seguro de eliminar este registro!!
    <table class="table table-sm table-hover">
    <thead>
        <th>Nombre</th>
        <th>Nombre</th>
        <th>Nombre</th>
        <th>Nombre</th>
        <th>Nombre</th>
    </thead>
    <tbody>
    <tr>
        <td>{{ $vencimiento->cantidad }}</td>
        <td>{{ $vencimiento->fec_vencimiento }}</td>
        <td>{{ $vencimiento->detalle }}</td>
        <td>{{ $vencimiento->id_producto }}</td>
        <td>{{ $vencimiento->id_ciudad }}</td>
    </tr>
    </tbody>
    
    </table>

<hr>
        <form action="{{ route('vencimiento.destroy', $vencimiento->id_fecven) }}" method="POST">
        @csrf
        @method('DELETE')

        <a href="{{ route('vencimiento.index') }}" class="btn btn-info">
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