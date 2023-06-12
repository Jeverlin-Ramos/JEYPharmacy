@extends('template')

@section('content')

<div class="content">

    <div class="row">

      <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <a href="/productos"><div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <img src="images/productos.png">            
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Ver productos</p>
                    <img src="images/mas.png">            

                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-calendar-o"></i>
                  Más información
              </div>
            </div></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <a href="/users"><div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <img src="images/usuario.png">            
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Ver Usuarios</p>
                    <img src="images/mas.png">            
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-calendar-o"></i>
                Más información
              </div>
            </div></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <a href="/pedidos"><div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <img src="images/carrito.png">            
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Ver Pedidos</p>
                    <img src="images/mas.png">            
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-calendar-o"></i>
                Más información
              </div>
            </div></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <a href="/empleados"><div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <img src="images/empleados.png">            
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Ver Empleados</p>
                    <img src="images/mas.png">            
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-calendar-o"></i>
                Más información
              </div>
            </div></a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
