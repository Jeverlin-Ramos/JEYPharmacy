@extends('template')

@section('template_title')
    Producto
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3>PRODUCTOS</h3>
                            </span>


                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir un producto') }}
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
                                        
										<th>Nombre</th>
										<th>Precio</th>
										<th>Categoría</th>
										<th>Cantidad Disponible</th>
										<th>Presentación</th>
										<th>Restricción</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $producto->nombre }}</td>
											<td>RD${{ $producto->precio }}.00 p/u</td>
											<td>{{ $producto->categoria->nombre }}</td>
											<td>{{ $producto->cant_disponible }}
                                        <!-- Botón para abrir el modal -->
                                        <button type="button" class="btn btn-sm btn-primary ml-2" data-bs-toggle="modal" data-bs-target="#miModal">
                                            +
                                        </button>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="miModalLabel">Añadir cantidad de producto</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                                </div>
                                                <div class="modal-body">
                                                
                                                    <div class="mb-3">
                                                        <label for="miInputNumerico" class="form-label">Cantidad</label>
                                                        <input type="number" class="form-control" id="miInputNumerico" placeholder="Ingresa la cantidad">
                                                      </div>

                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary ml-2">Guardar cambios</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                            </td>
											<td>{{ $producto->presentacion }}</td>
											<td>{{ $producto->restriccion }}+</td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
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
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
</div>
<!-- SCRIPT -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
