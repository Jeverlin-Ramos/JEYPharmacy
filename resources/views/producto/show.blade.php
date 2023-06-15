@extends('template')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h3>PRODUCTO</h3>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/images/' . $producto->imagen) }}" alt="Imagen del producto">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    {{ $producto->nombre }}
                                </div>
                                <div class="form-group">
                                    <strong>Descripcion:</strong><br>
                                    {{ $producto->descripcion }}
                                </div>
                                <div class="form-group">
                                    <strong>Componentes:</strong><br>
                                    {{ $producto->componentes }}
                                </div>
                                <div class="form-group">
                                    <strong>Precio:</strong>
                                    RD${{ $producto->precio }}.00
                                </div>
                                <div class="form-group">
                                    <strong>Categoria:</strong>
                                    {{ $producto->categoria->nombre }}
                                </div>
                                <div class="form-group">
                                    <strong>Presentación:</strong>
                                    {{ $producto->presentacion }}
                                </div>
                                <div class="form-group">
                                    <strong>Cantidad Disponible:</strong>
                                    {{ $producto->cant_disponible }} unidades
                                </div>
                                <div class="form-group">
                                    <strong>Fecha de Vencimiento:</strong>
                                    {{ $producto->fecha_vencimiento }}
                                </div>
                                <div class="form-group">
                                    <strong>Restricciones:</strong>
                                    {{ $producto->restriccion }}+
                                </div>
                                <div class="form-group">
                                    <strong>Dosis Recomendada:</strong><br>
                                    {{ $producto->dosis_recomendada }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
