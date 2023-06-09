<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::file('imagen', ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Img', 'required' => 'required']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('marca', $producto->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca', 'required' => 'required']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre & mg') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre', 'required' => 'required']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::textarea('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion', 'required' => 'required']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('componentes') }}
            {{ Form::textarea('componentes', $producto->componentes, ['class' => 'form-control' . ($errors->has('componentes') ? ' is-invalid' : ''), 'placeholder' => 'Componentes', 'required' => 'required']) }}
            {!! $errors->first('componentes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::number('precio', $producto->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio', 'required' => 'required']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoria') }}
            <select name="id_categoria" class="form-control" required>
                <option value="" selected>Seleccionar</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $categoria->id == $categoriaSeleccionada ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad Disponible') }}
            {{ Form::number('cant_disponible', $producto->cant_disponible, ['class' => 'form-control' . ($errors->has('cant_disponible') ? ' is-invalid' : ''), 'placeholder' => 'Cant Disponible']) }}
            {!! $errors->first('cant_disponible', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Presentacion') }}
            <select name="presentacion" class="form-control" required>
                <option value="" {{ $producto->presentacion ? '' : 'selected' }}>Seleccionar</option>
                <option value="Pastillas" {{ $producto->presentacion === 'Pastillas' ? 'selected' : '' }}>Pastillas</option>
                <option value="Jarabe" {{ $producto->presentacion === 'Jarabe' ? 'selected' : '' }}>Jarabe</option>
                <option value="Crema" {{ $producto->presentacion === 'Crema' ? 'selected' : '' }}>Crema</option>
                <option value="Spray" {{ $producto->presentacion === 'Spray' ? 'selected' : '' }}>Spray</option>
                <option value="Otro" {{ $producto->presentacion === 'Otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Vencimiento') }}
            {{ Form::date('fecha_vencimiento', $producto->fecha_vencimiento, ['class' => 'form-control' . ($errors->has('fecha_vencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Vencimiento']) }}
            {!! $errors->first('fecha_vencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Restricción') }}
            {{ Form::number('restriccion', $producto->restriccion, ['class' => 'form-control' . ($errors->has('restriccion') ? ' is-invalid' : ''), 'placeholder' => 'Restriccion']) }}
            {!! $errors->first('restriccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dosis_recomendada') }}
            {{ Form::textarea('dosis_recomendada', $producto->dosis_recomendada, ['class' => 'form-control' . ($errors->has('dosis_recomendada') ? ' is-invalid' : ''), 'placeholder' => 'Dosis Recomendada', 'required' => 'required']) }}
            {!! $errors->first('dosis_recomendada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>