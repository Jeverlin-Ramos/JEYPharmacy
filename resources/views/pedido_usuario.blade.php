<!DOCTYPE html> 
<html>

    <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>JEY Pharmacy</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />
    <!--bootstrap-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        
        body{margin-top:20px;}
        .cart-item-thumb {
            display: block;
            width: 10rem
        }
    
        .cart-item-thumb>img {
            display: block;
            width: 100%
        }
    
        .product-card-title>a {
            color: #222;
        }
    
        .font-weight-semibold {
            font-weight: 600 !important;
        }
    
        .product-card-title {
            display: block;
            margin-bottom: .75rem;
            padding-bottom: .875rem;
            border-bottom: 1px dashed #e2e2e2;
            font-size: 1rem;
            font-weight: normal;
        }
    
        .text-muted {
            color: #888 !important;
        }
    
        .bg-secondary {
            background-color: #f7f7f7 !important;
        }
    
        .accordion .accordion-heading {
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: bold;
        }
        .font-weight-semibold {
            font-weight: 600 !important;
        }
    
        #product {
            background-color: #002c3e;
            color: #81cc12;
        }
        </style>

    </head>

    <body>
        <div class="hero_area" style="min-height: 80vh">

            <!-- header section strats -->
            @include('home.header')
            <!-- end header section -->
            @if($pedido->Estado_pedido == 1)
            <section class="slider_section" >
                <div class="slider_bg_box">
                    <img src="{{ asset('images/slider.jpg') }}" alt="" style="height: 300px;">
                    <h3 class="pt-5 text-center">Tu fue realizado con éxito, más información en breve</h3>
                </div>
            </section>

            @elseif($pedido->Estado_pedido == 2)
            <section class="slider_section" >
                <div class="slider_bg_box">
                    <img src="{{ asset('images/slider.jpg') }}" alt="" style="height: 300px;">
                    <h3 class="pt-5 text-center">Tu pedido esta siendo procesado</h3>
                </div>
            </section>

            @elseif($pedido->Estado_pedido == 3)
            <section class="slider_section" >
                <div class="slider_bg_box">
                    <img src="{{ asset('images/slider.jpg') }}" alt="" style="height: 300px;">
                    <h3 class="text-center pt-3">Tu pedido fue despachado</h3>
                </div>
            </section>

            @elseif($pedido->Estado_pedido == 4)
            <section class="slider_section" >
                <div class="slider_bg_box">
                    <img src="{{ asset('images/slider.jpg') }}" alt="" style="height: 300px;">
                    <h3 class="text-center pt-3">Tu pedido fue entregado con éxito</h3>
                </div>
            </section>

            @elseif($pedido->Estado_pedido == 5)
            <section class="slider_section" >
                <div class="slider_bg_box">
                    <img src="{{ asset('images/slider.jpg') }}" alt="" style="height: 300px;">
                    <h3 class="text-center pt-3">Tu pedido fue cancelado</h3>
                </div>
            </section>
            @endif

        </div>

        @if($pedido->Estado_pedido == 3)
        <div class="d-flex justify-content-center pt-2">
            <div>
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                        <img src="{{ asset('storage/employees/' . $pedido->empleado->Imagen) }}" alt="Imagen" width="140" height="140">
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{$pedido->empleado->Nombre}}</h4>
                    <p class="mb-1">{{$pedido->empleado->Numero_tel}}</p>
                    <p class="mb-0">¿Tú pedido fue entregado? </p>
                    <p class="mb-0"> <a href="{{ route('pedido.entregado', ['id' => $pedido->id]) }}" class="btn btn-sm btn-primary">Confirma aquí</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif

            <div class="container pb-5 mt-n2 mt-md-n3 pt-4 ">

                <div class="row col-12 d-flex justify-content-center">

                    <div class="col-xl-9 col-md-8">
                        <h2 class="h6 d-flex flex-wrap justify-content-between align-items-center px-4 py-3 " id="product"><span><h4>Productos</h4></span></h2>
                        @foreach($detalles as $detalle)
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                            <div class="media d-block d-sm-flex text-center text-sm-left">
                                <a class="cart-item-thumb mx-auto mr-sm-4" href="{{ route('productos-detail', $detalle->producto->id) }}"><img src="{{ asset('storage/images/' . $detalle->producto->imagen) }}" alt="Product"></a>
                                <div class="media-body ml-3 pt-3">
                                    <h3 class="product-card-title font-weight-semibold border-0 pb-0 ml-3"><a href="{{ route('productos-detail', $detalle->producto->id) }}">{{$detalle->producto->nombre}}</a></h3>
                                    <div class="font-size-sm"><span class="text-muted mr-2">Presentación:</span>{{$detalle->producto->presentacion}}</div>
                                    <div class="font-size-sm"><span class="text-muted mr-2">Marca/Laboratorio:</span>{{$detalle->producto->marca}}</div>
                                    <div class="font-size-sm"><span class="text-muted mr-2">Restricciones (Edad):</span>{{$detalle->producto->restriccion}}+</div>
                                    <div class="font-size-lg text-primary pt-2">RD${{ $detalle->Cantidad_producto_pedido * $detalle->Precio_unitario }}.00</div>
                                </div>
                            </div>
                            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                                <div class="form-group mb-2">
                                    <label for="quantity1">Cantidad</label>
                                    <input class="form-control form-control-sm" type="number" name="cantidad" readonly value="{{$detalle->Cantidad_producto_pedido}}">
                                </div>
                            </div>
                        
                </div>
            @endforeach

            <div class="py-2"><span class="d-inline-block align-middle text-sm text-muted font-weight-medium text-uppercase mr-2">Subtotal:</span><span class="d-inline-block align-middle text-xl font-weight-medium">RD${{$pedido->Subtotal}}.00</span></div>
            <div class="py-2"><span class="d-inline-block align-middle text-sm text-muted font-weight-medium text-uppercase mr-2">ITBIS:</span><span class="d-inline-block align-middle text-xl font-weight-medium">RD${{$pedido->itbis}}</span></div>
            <div class="py-2"><span class="d-inline-block align-middle text-sm text-muted font-weight-medium text-uppercase mr-2">Total:</span><span class="d-inline-block align-middle text-xl font-weight-medium">RD${{$pedido->Total}}</span></div>
            @if($pedido->Estado_pedido == 1 || $pedido->Estado_pedido == 2)
            <button id="btnCancelarPedido" class="btn btn-sm btn-danger mb-2">Cancelar pedido</button>
            @endif

            <div id="alertaContainer"></div>
            
            <script>
              document.getElementById("btnCancelarPedido").addEventListener("click", function() {
                var alertaHTML = `
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    ¿Estás seguro de que deseas cancelar el pedido?
                    <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <a class="btn btn-sm btn-danger" href="{{ route('pedido.cancelado', ['id' => $pedido->id]) }}">Confirmar cancelación</a>
                  </div>
                `;
                document.getElementById("alertaContainer").innerHTML = alertaHTML;
              });
            </script>

            
            </div>

        </div>
    </body>
</html>