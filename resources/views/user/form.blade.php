<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="flex flex-col mb-3">
            <label for="name">{{ __('Nombre Completo') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ isset($user) ? $user->name : '' }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex flex-col mb-3">
            <label for="email">{{ __('Correo Electrónico') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ isset($user) ? $user->email : '' }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="flex flex-col mb-3">
            <label for="Date">{{ __('Fecha de Nacimiento') }}</label>
            <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ isset($user) ? $user->fecha_nacimiento : '' }}" required autocomplete="fecha_nacimiento">
            @error('fecha_nacimiento')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex flex-col mb-3">
            <label for="telefono">{{ __('Número de Teléfono') }}</label>
            <input id="telefono" type="text" pattern="\d{3}-\d{3}-\d{4}" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ isset($user) ? $user->telefono : '' }}" placeholder="123-456-7891" required autocomplete="telefono" autofocus>
            @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="flex flex-col mb-3">
            <label for="password">{{ __('Contraseña') }}</label>
            <input id="password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex flex-col mb-3">
            <label for="password-confirm">{{ __('Confirma la Contraseña:') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
        </div>
       

        <div class="form-group">
            {{ Form::label('Rol') }}
            <select name="rol" class="form-control" required>
                <option value="">Seleccionar</option>
                <option value="cliente" {{ isset($user) && $user->rol === 'cliente' ? 'selected' : '' }}>Cliente</option>
                <option value="empleado" {{ isset($user) && $user->rol === 'empleado' ? 'selected' : '' }}>Empleado</option>
                <option value="admin" {{ isset($user) && $user->rol === 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>
    </div>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
