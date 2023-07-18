@extends('plantilla')

@section('seccion')

    <div class="row">

            <div class="card-body">
                <h5 class="card-title">Listado de pedido</h5>
                <p>
                <a href="{{ route('pedido.create')}}" class="btn btn-primary"> Agregar nueva pedido</a>
                </p>
            </div>

            









        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Cantidad en cajas</th>
                        <th>Fecha del pedido</th>
                        <th>Producto</th>
                        <th>Ciudad </th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>

                    @foreach($pedido as $item)
                        <tr>
                            <td>{{$item->id_pedido}}</td>
                            <td>{{$item->cantidad}}</td>
                            <td>{{$item->fec_pedido}}</td>
                            <td>{{$item->producto->nombre_producto}}</td>
                            <td>{{$item->ciudad->nombre}}</td>
                            <td>
                                <form action="{{ route('pedido.edit', $item->id_pedido) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('pedido.show', $item->id_pedido) }}" method="GET">
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