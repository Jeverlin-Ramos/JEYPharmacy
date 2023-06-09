@extends('template')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3>PEDIDOS</h3>

                                <form class="form my-2 my-lg-0">
                                    <div class="input-group ">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="query">
                                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                                    </div>
                                </form>

                            </span>


                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Usuario</th>
										<th>Fecha Pedido</th>
										<th>Direccion</th>
										<th>Estado Pedido</th>
										<th>Opcion Pago</th>
										<th>Subtotal</th>
										<th>Itbis</th>
										<th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidos as $pedido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pedido->user->name }}</td>
											<td>{{ $pedido->Fecha_pedido }}</td>
											<td>{{ $pedido->Direccion }}</td>
											<td>{{ $pedido->estadoPedido->descripcion }}</td>
											<td>{{ $pedido->Opcion_pago }}</td>
											<td>{{ $pedido->Subtotal }}</td>
											<td>{{ $pedido->itbis }}</td>
											<td>{{ $pedido->Total }}</td>
                                            <td>
                                                <form action="{{ route('pedidos.destroy',$pedido->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pedidos.show',$pedido->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pedidos->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
