<!DOCTYPE html>
<html>
<head>
  <title>Factura</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      padding: 20px;
      background: #ddd;
    }

    .invoice {
      border: 1px solid #ddd;
      padding: 30px;
      max-width: 600px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Agrega la sombra aquí */
      margin-top: 100px;
      background-color: white;
    }

    .invoice .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .invoice .row {
      margin-bottom: 20px;
    }

    .invoice .row .col {
      border: 1px solid #ddd;
      padding: 10px;
    }

    .invoice .row .col:first-child {
      width: 70%;
    }

    .invoice .row .col:last-child {
      width: 30%;
    }

    .control-bar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 100;
      background: #009688;
      color: white;
      line-height: 4rem;
      height: 4rem;
    }

    .logoholder {
       width: 14%
    }
  </style>
</head>
<body>
<div class="control-bar">
  <div class="logoholder text-center" >
     <img src="public\images\logo.png">
  </div><!--.logoholder-->
</div>   
  <div class="invoice">
    <div class="header">
        
      <h2>Factura</h2>
    </div>
    <div class="row">
      <div class="col">
        <p><strong>Cliente:</strong> Nombre del cliente</p>
      </div>
      <div class="col">
        <p><strong>Fecha:</strong> 12 de junio de 2023</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p><strong>Descripción:</strong> Servicio prestado</p>
      </div>
      <div class="col">
        <p><strong>Monto:</strong> $100.00</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p><strong>Total:</strong></p>
      </div>
      <div class="col">
        <p><strong>$100.00</strong></p>
      </div>
    </div>
  </div>
</body>
</html>
