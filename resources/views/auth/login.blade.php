@extends('layouts.Home')

@section('content')

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Inicia sesión</h4>
                                    <p class="mb-0">Ingresa tu correo y contraseña para iniciar sesión</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" placeholder="user@email.com" class="form-control form-control-lg" value="{{ old('email') }}" aria-label="Email">
                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="password" placeholder="Password" class="form-control form-control-lg" aria-label="Password" >
                                            @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Recuérdame</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-success btn-lg w-100 mt-4 mb-0" id="btn">Iniciar sesión</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-1 text-sm mx-auto">
                                        ¿Olvidaste tu contraseña? Restáurala 
                                        <a href="" class="text-info  font-weight-bold" id="link">aquí</a>
                                    </p>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        ¿No tienes una cuenta?
                                        <a href="{{ route('register') }}" class="text-info  font-weight-bold" id="link">Regístrate</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                            
                                style="background-image: url('https://img.freepik.com/foto-gratis/vista-superior-variedad-medicamentos-tabletas_23-2148529769.jpg?w=740&t=st=1685840975~exp=1685841575~hmac=42b8e590961e5de6200bb6ccab1a24cb67c1937f17584e8de170b81622bf6f99');
              background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Tu salud, nuestra prioridad"</h4>
                                <p class="text-white position-relative">Recupera tu bienestar con nosotros, tu farmacia de confianza.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection