@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? "{{ __('Show') Pedido" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $pedido->id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Pedido:</strong>
                            {{ $pedido->Fecha_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $pedido->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Pedido:</strong>
                            {{ $pedido->Estado_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion Pago:</strong>
                            {{ $pedido->Opcion_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Subtotal:</strong>
                            {{ $pedido->Subtotal }}
                        </div>
                        <div class="form-group">
                            <strong>Itbis:</strong>
                            {{ $pedido->itbis }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $pedido->Total }}
                        </div>
                        <div class="form-group">
                            <strong>Titular Tarjeta:</strong>
                            {{ $pedido->Titular_tarjeta }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Tarjeta:</strong>
                            {{ $pedido->Numero_tarjeta }}
                        </div>
                        <div class="form-group">
                            <strong>Cvv:</strong>
                            {{ $pedido->CVV }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Expiracion:</strong>
                            {{ $pedido->Fecha_expiracion }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Efectivo:</strong>
                            {{ $pedido->Monto_efectivo }}
                        </div>
                        <div class="form-group">
                            <strong>Cambio:</strong>
                            {{ $pedido->Cambio }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios:</strong>
                            {{ $pedido->Comentarios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
