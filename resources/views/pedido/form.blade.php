<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_usuario') }}
            {{ Form::text('id_usuario', $pedido->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_pedido') }}
            {{ Form::text('Fecha_pedido', $pedido->Fecha_pedido, ['class' => 'form-control' . ($errors->has('Fecha_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Pedido']) }}
            {!! $errors->first('Fecha_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $pedido->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado_pedido') }}
            {{ Form::text('Estado_pedido', $pedido->Estado_pedido, ['class' => 'form-control' . ($errors->has('Estado_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Estado Pedido']) }}
            {!! $errors->first('Estado_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Opcion_pago') }}
            {{ Form::text('Opcion_pago', $pedido->Opcion_pago, ['class' => 'form-control' . ($errors->has('Opcion_pago') ? ' is-invalid' : ''), 'placeholder' => 'Opcion Pago']) }}
            {!! $errors->first('Opcion_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Subtotal') }}
            {{ Form::text('Subtotal', $pedido->Subtotal, ['class' => 'form-control' . ($errors->has('Subtotal') ? ' is-invalid' : ''), 'placeholder' => 'Subtotal']) }}
            {!! $errors->first('Subtotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('itbis') }}
            {{ Form::text('itbis', $pedido->itbis, ['class' => 'form-control' . ($errors->has('itbis') ? ' is-invalid' : ''), 'placeholder' => 'Itbis']) }}
            {!! $errors->first('itbis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Total') }}
            {{ Form::text('Total', $pedido->Total, ['class' => 'form-control' . ($errors->has('Total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('Total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Titular_tarjeta') }}
            {{ Form::text('Titular_tarjeta', $pedido->Titular_tarjeta, ['class' => 'form-control' . ($errors->has('Titular_tarjeta') ? ' is-invalid' : ''), 'placeholder' => 'Titular Tarjeta']) }}
            {!! $errors->first('Titular_tarjeta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero_tarjeta') }}
            {{ Form::text('Numero_tarjeta', $pedido->Numero_tarjeta, ['class' => 'form-control' . ($errors->has('Numero_tarjeta') ? ' is-invalid' : ''), 'placeholder' => 'Numero Tarjeta']) }}
            {!! $errors->first('Numero_tarjeta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CVV') }}
            {{ Form::text('CVV', $pedido->CVV, ['class' => 'form-control' . ($errors->has('CVV') ? ' is-invalid' : ''), 'placeholder' => 'Cvv']) }}
            {!! $errors->first('CVV', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_expiracion') }}
            {{ Form::text('Fecha_expiracion', $pedido->Fecha_expiracion, ['class' => 'form-control' . ($errors->has('Fecha_expiracion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Expiracion']) }}
            {!! $errors->first('Fecha_expiracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Monto_efectivo') }}
            {{ Form::text('Monto_efectivo', $pedido->Monto_efectivo, ['class' => 'form-control' . ($errors->has('Monto_efectivo') ? ' is-invalid' : ''), 'placeholder' => 'Monto Efectivo']) }}
            {!! $errors->first('Monto_efectivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cambio') }}
            {{ Form::text('Cambio', $pedido->Cambio, ['class' => 'form-control' . ($errors->has('Cambio') ? ' is-invalid' : ''), 'placeholder' => 'Cambio']) }}
            {!! $errors->first('Cambio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Comentarios') }}
            {{ Form::text('Comentarios', $pedido->Comentarios, ['class' => 'form-control' . ($errors->has('Comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
            {!! $errors->first('Comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>