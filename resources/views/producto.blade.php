@extends('plantilla')

@section('seccion')

    <div class="row">
            <div class="card-body">
                <h5 class="card-title">Listado de producto</h5>
                <p>
                <a href="{{ route('producto.create')}}" class="btn btn-primary"> Agregar nueva producto</a>
                </p>
            </div>
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Formato</th>
                        <th>Precio</th>
                        <th>Sabor</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>

                    @foreach($producto as $item)
                        <tr>
                            <td>{{$item->id_producto}}</td>
                            <td>{{$item->nombre_producto}}</td>
                            <td>{{$item->formato_producto}}</td>
                            <td>{{$item->precio}}</td>
                            <td>{{$item->sabor_producto}}</td>
                            <td>
                                <form action="{{ route('producto.edit', $item->id_producto) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('producto.show', $item->id_producto) }}" method="GET">
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