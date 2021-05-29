@extends('layouts.app')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h2 style="text-align:center" class="display-4">Add Category</h2>
      <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    {{--Form create category--}}
      <form method="post" action="{{ route('admins.storeCategory')}}">
        @csrf
        @method('PATCH')
          <div class="form-group">
              <label for="name">Name :</label>
              <input type="text" class="form-control" name="category" placeholder="New Category"/>
          </div>
          <button style="float:right; margin-top:20px;" type="submit" class="btn btn-primary">Add category</button>
      </form>
  </div>
</div>
</div>
@endsection
