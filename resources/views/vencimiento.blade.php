@extends('plantilla')

@section('seccion')

    <div class="row">

            <div class="card-body">
                <h5 class="card-title">Listado de vencimiento</h5>
                <p>
                <a href="{{ route('vencimiento.create')}}" class="btn btn-primary"> Agregar nuevo producto por vencer</a>
                </p>
            </div>

        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Cajas</th>
                        <th>Fecha Vencimiento</th>
                        <th>Detalle</th>
                        <th>Producto</th>
                        <th>Ciudad</th>
                        <th>Dias sobra</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>

                    @foreach($vencimiento as $item)
                        <tr>
                            <td>{{$item->id_fecven}}</td>
                            <td>{{$item->cantidad}}</td>
                            <td>{{$item->fec_vencimiento}}</td>
                            <td>{{$item->detalle}}</td>
                            <td>{{$item->producto->nombre_producto}}</td>   
                            <td>{{$item->ciudad->nombre}}</td> 

                            <td>  <?php                                 
                                  $fecha_actual = date("Y-m-d");
                                  $dat=$item->fec_vencimiento;
                                  $startdate = strtotime($dat);
                                  $enddate = strtotime($fecha_actual);
                                  $tttt=($startdate-$enddate)/ 86400;
                                  
                                  if($tttt>0){ echo "Quedan $tttt dias para vencer"; 
                                } else{echo"Producto vencido";}                           

                                  ?> 
                            </td>
                               
                            
                            <td>
                                <form action="{{ route('vencimiento.edit', $item->id_fecven) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('vencimiento.show', $item->id_fecven) }}" method="GET">
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