@extends('layouts.app')
@section('main')

{{-- update Product--}}
<div class="container">
    <div class="col-sm-8 offset-sm-2">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <div class="container" style="margin-bottom: 200px">
        <div class="">
            <h2 style="text-align:center" class="display-4">Update Product</h2>
          <form class="" method="post" action="{{ route('admins.update', $editProduct->id) }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label for="name">Name :</label>
                  <input type="text" class="form-control" name="name" value="{{ $editProduct->name }} "/>
              </div>

              <div class="form-group">
                  <label for="description">Description :</label>
                  <input type="text" class="form-control" name="description" value="{{ $editProduct->description }} "/>
              </div>

              <div class="form-group">
                  <label for="price">Price :</label>
                  <input type="number" class="form-control" id="price" name="price" min="100.00" max="500.00" step="100.00" value="{{ $editProduct->price }} "/>
              </div>
             <div class="form-group">
                <label for="Category">Category :</label>
                 <select id="category" name="category_id">
                   <option value="1">Men</option>
                   <option value="2">Women</option>
                </select>

             </div>
              <div class="form-group">
                <label for="state">State :</label>
                  <select id="state" name="state" >
                    <option value="solde"  @if($editProduct->state=="solde") selected @endif>Solde</option>
                    <option value="standard"  @if($editProduct->state=="standard") selected @endif>Standard</option>
                 </select>
              </div>
              <button style="float:right; margin-top:20px;" type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
     </div>
    </div>
</div>
@endsection
