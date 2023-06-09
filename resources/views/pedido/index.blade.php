@extends('layouts.app')

@section('template_title')
    Pedido
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pedido') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pedidos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
                                        
										<th>Id Usuario</th>
										<th>Fecha Pedido</th>
										<th>Direccion</th>
										<th>Estado Pedido</th>
										<th>Opcion Pago</th>
										<th>Subtotal</th>
										<th>Itbis</th>
										<th>Total</th>
										<th>Titular Tarjeta</th>
										<th>Numero Tarjeta</th>
										<th>Cvv</th>
										<th>Fecha Expiracion</th>
										<th>Monto Efectivo</th>
										<th>Cambio</th>
										<th>Comentarios</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidos as $pedido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pedido->id_usuario }}</td>
											<td>{{ $pedido->Fecha_pedido }}</td>
											<td>{{ $pedido->Direccion }}</td>
											<td>{{ $pedido->Estado_pedido }}</td>
											<td>{{ $pedido->Opcion_pago }}</td>
											<td>{{ $pedido->Subtotal }}</td>
											<td>{{ $pedido->itbis }}</td>
											<td>{{ $pedido->Total }}</td>
											<td>{{ $pedido->Titular_tarjeta }}</td>
											<td>{{ $pedido->Numero_tarjeta }}</td>
											<td>{{ $pedido->CVV }}</td>
											<td>{{ $pedido->Fecha_expiracion }}</td>
											<td>{{ $pedido->Monto_efectivo }}</td>
											<td>{{ $pedido->Cambio }}</td>
											<td>{{ $pedido->Comentarios }}</td>

                                            <td>
                                                <form action="{{ route('pedidos.destroy',$pedido->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pedidos.show',$pedido->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pedidos.edit',$pedido->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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
@endsection
