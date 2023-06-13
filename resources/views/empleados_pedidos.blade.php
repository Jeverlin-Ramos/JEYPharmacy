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

.carbon-example {
  padding: 8px;
  background-color: #fff;
  width: 295px;
  box-sizing: border-box;
  border-radius: 6px;
  -webkit-box-align: start;
  -ms-flex-align: start;
  -webkit-align-items: flex-start;
  -moz-align-items: flex-start;
  align-items: flex-start;
  position: relative;
  z-index: 5;
  box-shadow: 0 2px 20px 0 rgba(0, 0, 0, 0.1);
  margin-top:20px;
}

.carbon-example img {
  margin-right: 9px;
  max-width: 125px;
}

.carbon-example .inner-wrapper {
  text-align: left;
}

.carbon-example .inner-wrapper p {
  font-size: 12px;
  line-height: 1.33;
  margin: 8px 0;
}

.carbon-example .inner-wrapper p.fine-print {
  font-size: 8px;
  color: #C5CDD0;
  line-height: 1.25;
  text-transform: uppercase;
  font-weight: 500;
}

.flex-wrapper {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  -webkit-justify-content: space-between;
  -moz-justify-content: space-between;
  justify-content: space-between;
}
@media screen and (max-width: 991px) {
  .flex-wrapper.two-col {
    display: block;
    text-align: center;
  }
}

.flex-wrapper.two-col > * {
  width: 50%;
}

.flex-wrapper.two-col > *:first-of-type {
  padding-right: 130px;
}
@media screen and (max-width: 991px) {

  .flex-wrapper.two-col > * {
    width: 100%;
  }

  .flex-wrapper.two-col > *:first-of-type {
    padding-right: 0;
  }
}

.flex-wrapper.two-col.reversed > *:first-of-type {
  order: 2;
  padding-right: 0;
}
@media screen and (min-width: 992px) {
  .flex-wrapper.two-col.reversed > *:first-of-type {
    padding-left: 130px;
  }
}

.flex-wrapper.three-col {
  text-align: left;
  -webkit-box-align: start;
  -ms-flex-align: start;
  -webkit-align-items: flex-start;
  -moz-align-items: flex-start;
  align-items: flex-start;
  margin-top: 40px;
}
@media screen and (max-width: 767px) {
  .flex-wrapper.three-col {
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  }
}
.flex-wrapper.three-col > * {
  width: 33.3%;
}
@media screen and (max-width: 767px) {
  .flex-wrapper.three-col > * {
    width: 100%;
  }
}
@media screen and (min-width: 768px) {
  .flex-wrapper.three-col li {
    padding-left: 20px;
    padding-right: 20px;
  }
  .flex-wrapper.three-col li:first-child {
    padding-left: 0;
  }
  .flex-wrapper.three-col li:last-child {
    padding-right: 0;
  }
}

.flex-wrapper.three-col .flex-wrapper {
  -webkit-box-align: start;
  -ms-flex-align: start;
  -webkit-align-items: flex-start;
  -moz-align-items: flex-start;
  align-items: flex-start;
  margin-top: 0;
}
@media screen and (max-width: 767px) {
  .flex-wrapper.three-col .flex-wrapper {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    justify-content: center;
  }

  .flex-wrapper.three-col .flex-wrapper:not(:first-of-type) {
    margin-top: 40px;
  }
}

.flex-wrapper.three-col .flex-wrapper .icon {
  top: 0;
  transform: none;
}

#div {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

</style>
    
</head>

    <body>
        <div class="hero_area" style="min-height: 80vh"> 
            <!-- header section strats -->
            @include('home.header')
            <!-- end header section -->

            <section class="slider_section" >
                <div class="slider_bg_box">
                    <img src="{{ asset('images/slider.jpg') }}" alt="" style="height: 300px;">
                </div>
            </section>

            <div class="heading_container heading_center">
                <h2 class="pt-5">
                    Lista de <span>pedidos</span>
                 </h2>
            </div>

        </div>

        
        <div class="container" id="div">
          <div class="row">
            @foreach($pedidos as $pedido)
            <a href="{{ route('pedido.detalle.empleados', ['id' => $pedido->id]) }}">
            <div class="col-md-4">
              <div class="carbon-example flex-wrapper">
                <img src="{{ asset('images/logo-cuadrado.png') }}" alt="example design logo">
                <div class="inner-wrapper">
                  <p class="pr-2">{{ $pedido->user->name }}</p>
                  <p class="fine-print">RD${{ $pedido->Total }}</p>
                </div>
              </div>
            </div>
          </a>
            @endforeach
          </div>
        </div>

    </body>

</html>