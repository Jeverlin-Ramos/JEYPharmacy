<!DOCTYPE html>
<html>
<head>
  <title>Factura</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body{
      background: #ddd;
    }
    .contenedor {
  background-color: white;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Ajusta los valores de sombra según tus preferencias */
  margin: 0 auto; /* Centrar horizontalmente */
  max-width: 990px; /* Ajusta el ancho máximo según tus necesidades */
  padding: 20px; /* Ajusta el espacio interno según tus necesidades */
  margin-top: 10%;
  margin-bottom: 10%;
}

    .factura {
  table-layout: fixed;
}

.fact-info > div > h5 {
  font-weight: bold;
}

.factura > thead {
  border-top: solid 3px #000;
  border-bottom: 3px solid #000;
}

.factura > thead > tr > th:nth-child(2), .factura > tbod > tr > td:nth-child(2) {
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
      background: #009688;
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
}
  </style>
</head>
<body>
<div class="control-bar">
  <div class="logoholder text-center" >
     <img src="public\images\logo.png">
  </div><!--.logoholder-->
</div>   
<div class="contenedor">
  <div id="app" class="col-11">

    <h2>Factura de compra</h2>
  
    <hr />
  
    <div class="row fact-info mt-3">
      <div class="col-3">
        <h5>Facturar a</h5>
        <p>
          Arian Manuel Garcia Reynoso
        </p>
      </div>
      <div class="col-3">
        <h5>Enviar a</h5>
        <p>
          Cotui, Sanchez Ramirez
          Santa Fe, #19
          arianmanuel75@gmail.com
        </p>
      </div>
      <div class="col-3">
        <h5>N° de factura</h5>
        <h5>Fecha</h5>
        <h5>Fecha de vencimiento</h5>
      </div>
      <div class="col-3">
        <h5>103</h5>
        <p>09/05/2019</p>
        <p>09/05/2019</p>
      </div>
    </div>
  
    <div class="row my-5">
      <table class="table table-borderless factura">
        <thead>
          <tr>
            <th>Cant.</th>
            <th>Descripcion</th>
            <th>Precio Unitario</th>
            <th>Importe</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Acetaminofén (Paracetamol)</td>
            <td>3,000.00</td>
            <td>3,000.00</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Acido valproico 200 mg/ml Solucion Oral</td>
            <td>4,000.00</td>
            <td>12,000.00</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th></th>
            <th></th>
            <th>Total Factura</th>
            <th>RD$15,000.00</th>
          </tr>
        </tfoot>
      </table>
    </div>
  
    <div class="cond row">
      <div class="col-12 mt-3">
        <h4>Condiciones y formas de pago</h4>
        <p>El pago se debe realizar en un plazo de 15 dias.</p>
        <p>
          Banco Banreserva
          <br />
          IBAN: DO XX 0075 XXXX XX XX XXXX XXXX
          <br />
          Código SWIFT: BPDODOSXXXX
        </p>
      </div>
    </div>
  </div>
</div> 
</body>
</html>
