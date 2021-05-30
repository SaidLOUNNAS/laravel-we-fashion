@extends('welcome')
@section('contents')
  <main role="main">
    <div class="album py-5 bg-light">
      <div class="container">
        {{-- product men--}}
        @if(Request::url() === 'http://localhost/fashionsaidlounnas/public/men')
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Stock Product : Men</span>
          <span class="badge badge-secondary badge-pill">{{$countMen}} {{'resultats'}}</span>
        </h4>

        {{-- product women--}}

        @elseif(Request::url() === 'http://localhost/fashionsaidlounnas/public/women')
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Stock Product : Women</span>
          <span class="badge badge-secondary badge-pill"> {{$countWomen}} {{'resultats'}}</span>
        </h4>

        {{--  product solde--}}

        @elseif(Request::url() === 'http://localhost/fashionsaidlounnas/public/soldes')
        <h4  class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted" >Stock Product : Solde</span>
          <span class="badge badge-secondary badge-pill" >{{$countSolde}} {{'resultats'}}</span>
        </h4>
        @else
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Stock Of Products :</span>
          <span class="badge badge-secondary badge-pill"> {{$counts}} {{'resultats'}}</span>
        </h4>
        @endif


        {{-- display shop--}}
        <div class="row">
          @foreach($products as $product)
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <a href="{{ route('admins.ProductDescription',$product->id)}}">
                <img src="{{asset('images/'.$product->image)}}" alt="image" width="100%" height="350px">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">{{'name'}} : {{$product->name}}</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary"><span style="color:red;font-weight:bold">{{'price'}}</span> : <span style="color:black;font-weight:bold">{{$product->price}}</span></button>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      @if($product->state==="solde")
                      <button type="button" class="btn btn-sm btn-outline-secondary">{{$product->state}}</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary"><span style="color:red;font-weight:bold">-75%</span></button>
                      @else
                      <button type="button" class="btn btn-sm btn-outline-secondary">{{$product->state}}</button>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          @endforeach
        </div>
      </div>
    </div>
    {{$products->links()}}
  </main>
  <div>
  </div>
  <style>
    a{
          text-decoration: none !important;
      }
    img {
      width: 480px;
      height: 450px;
  }
  </style>
  @endsection
