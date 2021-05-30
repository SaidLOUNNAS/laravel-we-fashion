@extends('layouts.app')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h2 style="text-align:center" class="display-4">Add product</h2>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      @endif
     {{-- form for create product --}}
    <div class="container" style="margin-bottom: 100px">
    <div class="">

            <form method="post" action="{{ route('admins.store') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="name">Name : </label>
                    <input type="text" class="form-control" name="name" placeholder="Name"/>
                </div>

                <div class="form-group">
                    <label for="couleur">description : </label>
                    <input type="text" class="form-control" name="description" placeholder="Description"/>
                </div>

                <div class="form-group">
                    <label for="price">Price : </label>
                    <input type="number" placeholder="Price" class="form-control" id="price" name="price" min="150" max="600.00" step="100.00"/>
                </div>
                <div class="form-group">
                    <label for="size">Size : </label>
                    <select id="size" name='size'>
                    <option value="XS">XS</option>
                    <option value="S" selected>S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="status">Status : </label>
                    <select id="status" name="status">
                    <option value="0">non published</option>
                    <option value="1" selected>published</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="state">State : </label>
                    <select id="state" name="state">
                    <option value="standard" selected>Standard</option>
                    <option value="solde">solde</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="category">Category : </label>
                    <select id="category" name="category_id">
                      <option value="1">Men</option>
                      <option value="2">Women</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="text">Reference : </label>
                    <input type="text" class="form-control" name="reference" />
                </div>
                <div class="input-group">
              <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image" placeholder="image">
                  <label class="custom-file-label">choose file</label>
              </div>
            </div>
                <button style="float:right; margin-top:20px;" type="submit" class="btn btn-primary">Add product</button>
            </form>
    </div>
    </div>
  </div>
</div>
</div>
@endsection
