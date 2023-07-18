@extends('plantilla')

@section('seccion')

    <div class="row">

            <div class="card-body">
                <h5 class="card-title">listado de ciudades</h5>
                <p>
                <a href="{{ route('ciudad.create')}}" class="btn btn-primary"> Agregar nueva ciudad</a>
                </p>
            </div>

        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>

                    @foreach($ciudad as $item)
                        <tr>
                            <td>{{$item->id_ciudad}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>
                                <form action="">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="">
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