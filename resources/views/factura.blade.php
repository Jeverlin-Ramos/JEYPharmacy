<!DOCTYPE html>
<html>
<head>
  <title>Factura</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body{
      background: #009688;
    }
    .contenedor {
      background-color: white;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin: 0 auto;
      max-width: 990px;
      padding: 20px;
      margin-top: 10%;
      margin-bottom: 10%;
    }

    .fact-info > div > h5 {
      font-weight: bold;
    }

    .factura > thead {
      border-top: solid 3px #000;
      border-bottom: 3px solid #000;
    }

    .factura > thead > tr > th:nth-child(2), .factura > tbody > tr > td:nth-child(2) {
      width: 300px;
    }

    .factura > thead > tr > th:nth-child(n+3) {
      text-align: right;
    }

    .factura > tbody > tr > td:nth-child(n+3) {
      text-align: right;
    }

    .factura > tfoot > tr > th, .factura > tfoot > tr > th:nth-child(n+3) {
      font-size: 24px;
      text-align: right;
    }

    .cond {
      border-top: solid 2px #000;
    }
    
    .control-bar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 100;
      background: #ffffff;
      color: white;
      line-height: 4rem;
      height: 4rem;
    }

    .logoholder {
      width: 14%
    }

    @media (max-width: 767px) {
      .contenedor {
        margin: 20px;
      }

      .logoholder {
        width: 40%;
      }

      .table-responsive {
        overflow-x: auto;
      }
    }
  </style>
</head>
<body>
<div class="control-bar">
  <div class="logoholder text-center">
    <img src="{{ asset('images/logo.png') }}" alt="Logo">
  </div><!--.logoholder-->
</div>   
<div class="contenedor">
  <div id="app" class="col-11">

    <h2>Factura de compra</h2>
  
    <hr />
  
    <div class="row fact-info mt-3">
      <div class="col-md-3">
        <h5>Facturar a</h5>
        <p>{{ $Usuario->name }}</p>
      </div>
      <div class="col-md-3">
        <h5>Enviar a</h5>
        <p>{{ $pedido->Direccion }}</p>
        <p>{{ $Usuario->email }}</p>
      </div>
      <div class="col-md-3">
        <h5>Fecha:</h5>
      </div>
      <div class="col-md-3">
        <p>{{ $pedido->Fecha_pedido }}</p>
      </div>
    </div>
    
  
    <div class="row my-5">
      <div class="table-responsive">
        <table class="table table-borderless factura">
          <thead>
            <tr>
              <th>Cant.</th>
              <th>Descripción</th>
              <th>Precio Unitario</th>
              <th>ITBIS</th>
              <th>Importe</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($detallesCarrito as $item)  
            <tr>
              <td>{{$item->Cantidad_producto}}</td>
              <td>{{$item->producto->nombre}}</td>
              <td>RD${{$item->Precio_unitario}}.00</td>
              <td>RD${{($item->Precio_unitario * $item->Cantidad_producto)*0.18}}</td>
              <td>RD${{ number_format((1.18 * ($item->Precio_unitario * $item->Cantidad_producto)), 2) }}</td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th></th>
              <th></th>
              <th>Total</th>
              <th>RD${{ $pedido->Total }}</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  
    <div class="cond row">
      <div class="col-12 mt-3">
        <h4>Forma de pago</h4>
        @if($pedido->Opcion_pago == "efectivo")
          <p>
            Pago Contra Entrega
            <br />
            Monto Pagado: {{'RD$'. $pedido->Monto_efectivo. '.00' }}
            <br />
            Cambio: {{'RD$'.$pedido->Cambio}}
          </p>
        @elseif($pedido->Opcion_pago == "tarjeta")
          <p>
            Tarjeta Crédito o Débito
            <br />
            {{ 'XXXX XXXX XXXX ' . substr($pedido->Numero_tarjeta, -4) }}
            <br />
            {{$pedido->Titular_tarjeta}}
          </p>
        @endif
        
      </div>
    </div>
  </div>
</div> 
</body>
</html>
