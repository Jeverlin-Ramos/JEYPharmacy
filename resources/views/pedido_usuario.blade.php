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
            
            <section class="slider_section" >
                <div class="slider_bg_box">
                    <img src="{{ asset('images/slider.jpg') }}" alt="" style="height: 300px;">
                    <h3 class="pt-5 text-center">Tu pedido esta siendo procesado</h3>
                    <h3 class="text-center">Tu pedido fue despachado</h3>
                </div>
            </section>
        </div>

        
        <div class="d-flex justify-content-center pt-3">
            <div>
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">John Smith</h4>
                    <p class="mb-0">@johnny.s</p>
                    <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

            <div class="container pb-5 mt-n2 mt-md-n3 pt-4 ">

                <div class="row col-12 d-flex justify-content-center">

                    <div class="col-xl-9 col-md-8">
                        <h2 class="h6 d-flex flex-wrap justify-content-between align-items-center px-4 py-3 " id="product"><span><h4>Productos</h4></span></h2>

                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                            <div class="media d-block d-sm-flex text-center text-sm-left">
                                <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="https://www.bootdey.com/image/240x240/FF0000/000000" alt="Product"></a>
                                <div class="media-body pt-3 ml-3">
                                    <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">Calvin Klein Jeans Keds</a></h3>
                                    <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>8.5</div>
                                    <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Black</div>
                                    <div class="font-size-lg text-primary pt-2">$125.00</div>
                                </div>
                            </div>
                            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                                <div class="form-group mb-2">
                                    <label for="quantity1">Quantity</label>
                                    <input class="form-control form-control-sm" type="number" id="quantity1" value="1">
                                </div>

                            </div>
                        </div>
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                            <div class="media d-block d-sm-flex text-center text-sm-left">
                                <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="https://www.bootdey.com/image/240x240/1E90FF/000000" alt="Product"></a>
                                <div class="media-body pt-3 ml-3">
                                    <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">The North Face Hoodie</a></h3>
                                    <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>XL</div>
                                    <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Gray</div>
                                    <div class="font-size-lg text-primary pt-2">$134.00</div>
                                </div>
                            </div>
                            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                                <div class="form-group mb-2">
                                    <label for="quantity2">Quantity</label>
                                    <input class="form-control form-control-sm" type="number" id="quantity2" value="1">
                                </div>

                            </div>
                        </div>
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                            <div class="media d-block d-sm-flex text-center text-sm-left">
                                <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="https://www.bootdey.com/image/240x240/FF8C00/000000" alt="Product"></a>
                                <div class="media-body pt-3 ml-3">
                                    <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">Medicine Chameleon Sunglasses</a></h3>
                                    <div class="font-size-sm"><span class="text-muted mr-2">Lenses:</span>Chameleon</div>
                                    <div class="font-size-sm"><span class="text-muted mr-2">Frame:</span>Gray / Black</div>
                                    <div class="font-size-lg text-primary pt-2">$47.00</div>
                                </div>
                            </div>
                            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                                <div class="form-group mb-2">
                                    <label for="quantity3">Quantity</label>
                                    <input class="form-control form-control-sm" type="number" id="quantity3" value="1">
                                </div>

                            </div>
                        </div>
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between my-4">
                            <div class="media d-block d-sm-flex text-center text-sm-left">
                                <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="https://www.bootdey.com/image/240x240/eeeeee/000000" alt="Product"></a>
                                <div class="media-body pt-3 ml-3">
                                    <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">Adidas Performance Hat</a></h3>
                                    <div class="font-size-sm"><span class="text-muted mr-2">Material:</span>Acrylic</div>
                                    <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Pink / Dark green</div>
                                    <div class="font-size-lg text-primary pt-2">$19.00</div>
                                </div>
                            </div>
                            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                                <div class="form-group mb-2">
                                    <label for="quantity4">Quantity</label>
                                    <input class="form-control form-control-sm" type="number" id="quantity4" value="1">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        
        
        

    </body>

</html>