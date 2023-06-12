@extends('template')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/employees/' . $empleado->Imagen) }}" alt="Imagen del empleado">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    {{ $empleado->Nombre }}
                                </div>
                                <div class="form-group">
                                    <strong>Numero Tel:</strong>
                                    {{ $empleado->Numero_tel }}
                                </div>
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    {{ $empleado->Email }}
                                </div>
                                <div class="form-group">
                                    <strong>Direccion:</strong>
                                    {{ $empleado->Direccion }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
