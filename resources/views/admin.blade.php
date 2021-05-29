@extends('layouts.app')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    @if(Request::url() === 'http://localhost/fashionsaidlounnas/public/admin')
    <h2 style="text-align:center" class="display-4">Products</h2>
  <div>
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
    @endif
      </div>
     {{-- form product --}}
    <div class="container">
    <div class="">
        <div style="margin-left:950px;">
            <a style="margin: 19px;" href="{{ route('admins.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Product</a>
          </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <td>Name</td>
                <td>Price</td>
                <td>State</td>
                <td>Details</td>
                <td >Actions</td>
              </tr>
            </thead>
            <tbody>
              @foreach($shops as $shop)
              <tr>
                <td>{{$shop->name}}</td>
                <td>{{$shop->price}}</td>
                <td>{{$shop->state}}</td>
                <td>
                  <a href="" class="btn btn-primary">Details</a>
                </td>
                <td>
                  <a href="{{ route('admins.edit',$shop->id)}}"><i class="far fa-edit" style="font-size: 20px;color:rgb(231, 199, 13);"></i></a>
                  <form action="{{ route('admins.destroy', $shop->id)}}" method="post">
                    @csrf
                    @method('POST')
                  <button  type="submit"><i class="far fa-trash-alt" style="font-size: 20px;color:rgb(245, 13, 13);"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$shops->links()}}
        </div>
    </div>
    </div>
  </div>
  {{-- form Category --}}
  @elseif(Request::url() === 'http://localhost/fashionsaidlounnas/public/category')
  <div class="col-sm-12">
      <h2 style="text-align:center" class="display-4">Categories</h2>
    <div style="margin-left:950px;">
      <a style="margin: 19px;" href="{{ route('admins.createCategory')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Category</a>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Details</td>
          <td>Actions</td>
        </tr>
      </thead>
      <tbody>
        @foreach($shops as $shop)
        <tr>
          <td>{{$shop->id}}</td>
          <td>{{$shop->name}}</td>
          <td>
            <a href="" class="btn btn-primary">Details</a>
          </td>
          <td>
            <a href="{{ route('admins.editCategory',$shop->id)}}" ><i class="far fa-edit" style="font-size: 20px;color:rgb(231, 199, 13);"></i></a>
            <form action="{{ route('admins.destroyCategory', $shop->id)}}" method="post">
              @csrf
              @method('POST')
              <button type="submit"><i class="far fa-trash-alt" style="font-size: 20px;color:rgb(245, 13, 13);"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endif
</div>
</div>
@endsection
