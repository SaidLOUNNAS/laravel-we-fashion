
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="form-validation.css" rel="stylesheet">
<title>We | Fashion</title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      a{
          text-decoration: none !important;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>

  <body class="bg-light" class="margin:0">
    <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="http://localhost/fashionsaidlounnas/public/"><h1 style="color:#66EB9A;font-weight:bold;font-size:30px;">We Fashion</h1></a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-item nav-link" href="/fashionsaidlounnas/public/soldes">SOLDES</a><span class="sr-only">(current)</span>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="/fashionsaidlounnas/public/men">MEN</a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="/fashionsaidlounnas/public/women">WOMEN</a>
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
  <div class="py-5 text-center">
    <h2>Your Product</h2>
  </div>

{{-- Description Product selected  --}}
    <div class="container">
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">

      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product Name</h6>
            <small class="text-muted">{{$showProduct->name}}</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product description</h6>
            <small class="text-muted">{{$showProduct->description}}</small>
          </div>
        </li>

        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Size</h6>
            <small class="text-muted">{{$showProduct->size}}</small>
          </div>
          <span class="text-muted"></span>
        </li>

        @if($showProduct->state==="solde")
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Price</h6>
            <small class="text-muted">{{$showProduct->price}}{{'€'}}</small>
          </div>
          <span class="text-danger" style="font-weight:bold;font-weight:bold;text-decoration: line-through;">499€</span>
        </li>
        @else

        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Price</h6>
            <small class="text-muted">{{$showProduct->price}}{{'€'}}</small>
          </div>

        </li>

          @endif


         @if($showProduct->state==="solde")
        <li class="list-group-item d-flex justify-content-between bg-light">

          <div class="text-success">
            <h6 class="my-0">State</h6>
            <small>{{$showProduct->state}}</small>
          </div>
          <span class="text-danger" style="font-weight:bold;font-weight:bold;">-25%</span>
        </li>
        @else
        <li class="list-group-item d-flex justify-content-between bg-light">

          <div class="text-success">
            <h6 class="my-0">State</h6>
            <small>{{$showProduct->state}}</small>
          </div>

        </li>
        @endif

      </ul>



      <form class="card p-2">
          <select id="size" name='size'>
          <option value="XS">XS</option>
          <option value="S" selected>S</option>
          <option value="M">M</option>
          <option value="L">L</option>
          <option value="XL">XL</option>
         </select>
      </form>
      <form class="card p-2">
            <button type="submit" class="btn btn-secondary">Buy</button>
      </form>
    </div>
        <div class="row col-md-7 order-md-1" style="margin-bottom:40px">
          <div class="card mb-4 shadow-sm">
             <a href="{{ route('admins.ProductDescription',$showProduct->id)}}">

            <img src="{{asset('images/'.$showProduct->image)}}" alt="image" width="100%" height="600px">

            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">{{'name'}} : {{$showProduct->name}}</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">
                <span style="color:red;font-weight:bold">{{'price'}}</span> : <span style="color:black;font-weight:bold">{{$showProduct->price}}</span></button>

                </div>

              </div>
            </div>

            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  @if($showProduct->state==="solde")
                  <button type="button" class="btn btn-sm btn-outline-secondary">{{$showProduct->state}}</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><span style="color:red;font-weight:bold">-75%</span></button>
                  @else
                  <button type="button" class="btn btn-sm btn-outline-secondary">{{$showProduct->state}}</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><span style="color:red;font-weight:bold"></span></button>
                  @endif
                </div>
                <small class="text-muted">Recommended</small>
              </div>
            </div>
          </div>
          </a>
        </div>
  </div>
    </div>
    <footer class="text-center text-lg-start bg-light text-muted" style="background-color: #dae0e6!important;
    width: 100%;" >
        <!-- Section: Social media -->
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
  </body>
</html>
