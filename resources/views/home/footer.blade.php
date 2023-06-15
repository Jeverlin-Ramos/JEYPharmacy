<footer>
    <div class="container">
       <div class="row">
          <div class="col-md-4">
              <div class="full">
                 <div class="logo_footer">
                   <a href="#"><img width="210" src="images/logo.png" alt="#" /></a>
                 </div>
                 <div class="information_f">
                   <p><strong>TELÉFONO:</strong> +809 987 6543</p>
                   <p><strong>EMAIL:</strong> jeypharmacy@gmail.com</p>
                 </div>
              </div>
          </div>
          <div class="col-md-8">
             <div class="row">
             <div class="col-md-7">
                <div class="row">
                   <div class="col-md-6">
                <div class="widget_menu">
                   <h3>Menú</h3>
                   <ul>
                      <li><a href="/">INICIO</a></li>
                      <li><a href="{{route('productos-view')}}">PRODUCTOS</a></li>
                      <li><a href="{{ route('login') }}">LOGIN</a></li>
                      <li><a href="{{ route('register') }}">REGISTRO</a></li>

                   </ul>
                </div>
             </div>
             <div class="col-md-6">
                <div class="widget_menu">
                   <h3>Cuenta</h3>
                   <ul>
                      <li><a href="{{route('carrito.mostrar')}}">CARRITO</a></li>
                      <li><a href="{{ route('todos-mis-pedidos') }}">TODOS LOS PEDIDOS</a></li>
                   </ul>
                </div>
             </div>
                </div>
             </div>     
             <div class="col-md-5">
                <div class="widget_menu">
                   <h3>JEY Pharmacy</h3>
                   <div class="information_f">
                     <p>Donde la calidad esta asegurada</p>
                   </div>

                </div>
             </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
