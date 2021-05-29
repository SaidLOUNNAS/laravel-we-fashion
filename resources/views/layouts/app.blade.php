<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="http://localhost/fashionsaidlounnas/public/"><h1 style="color:#66EB9A;font-weight:bold;font-size:30px;">weFashion</h1></a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
             <a class="nav-item nav-link" href="{{ route('admin')}}">Products</a><span class="sr-only">(current)</span>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="{{ route('admins.category')}}">Categories</a>
            </li>
            <li class="nav-item">
             <a class="nav-item nav-link" href="http://localhost/fashionsaidlounnas/public/">Shop</a>
            </li>
          </ul>
 <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @else
        <li class="nav-item">
            <div class="nav-link">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
        </div>
      </nav>
</header>
<body>
        @yield('content')
        <div style="width: 100%;margin: 0">
{{-- show pages --}}
          <div class="">
          @yield('main')
         </div>
        </div>
        <div class="">
            <footer class="text-center text-lg-start bg-light text-muted" style="
background-color: #dae0e6!important;
          position: fixed;
  top: auto;
  bottom: 0;
  width: 100%;" >
                <section
                  class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                  <div class="me-5 d-none d-lg-block">
                    <span></span>
                  </div>
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                  <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">

                      <!-- Grid column -->
                      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Informations
                        </h6>
                        <p>
                          <a href="#!" class="text-reset">menstions légales</a>
                        </p>
                        <p>
                          <a href="#!" class="text-reset">Presse</a>
                        </p>
                        <p>
                          <a href="#!" class="text-reset">Fabrication</a>
                        </p>
                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Service client
                        </h6>
                        <p>
                          <a href="#!" class="text-reset">Contactez-nous</a>
                        </p>
                        <p>
                          <a href="#!" class="text-reset">Livraison & Retour</a>
                        </p>
                        <p>
                          <a href="#!" class="text-reset">Conditions de ventes</a>
                        </p>
                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                          Reseaux sociaux
                        </h6>
                        <p><i class="fab fa-facebook-f"></i> Facebook</p>
                        <p>
                        <i class="fab fa-instagram"></i>
                          Instagram
                        </p>
                        <p><a style="font-size:16px;"href="#!">Inscrivez-vous à la newsletter</a></p>
                      </div>
                      <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                  </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                  © 2021 Copyright :
                  <a class="text-reset fw-bold" href="https://portfolio-said.web.app/" style="font-size:16px;"> weFashion by Said LOUNNAS</a>
                </div>
                <!-- Copyright -->
              </footer>
        </div>
</body>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</html>

