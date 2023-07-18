@extends('plantilla')

@section('seccion')

    <div class="row">

            <div class="card-body">

                <div class="row">
                    <div class="col-sm-12"> 
                    
                        @if($mensaje=Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{$mensaje}}                          
                            </div>
                        @endif

                    </div>
                </div>

                <h2 class="card-title">Listado de ciudades</h2>
                <p>
                <a href="{{ route('ciudad.create')}}" class="btn btn-primary"> Agregar nueva ciudad</a>
                </p>
            </div>

        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>id</th>
                        <th>nombre</th>
                        <th>editar</th>
                        <th>eliminar</th>
                    </thead>
                    <tbody>

                    @foreach($ciudad as $item)
                        <tr>
                            <td>{{$item->id_ciudad}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>
                                <form action="{{ route('ciudad.edit', $item->id_ciudad) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('ciudad.show', $item->id_ciudad) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </p>


        </div>


    </div>

@endsection