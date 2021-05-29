@extends('layouts.app')

@section('main')

     {{-- Update category--}}
<div class="row">
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
        <div class="container">
          <div class="">
            <h2 style="text-align:center" class="display-4">Update Category</h2>
            <form method="post" action="{{ route('admins.updateCategory', $categories->id) }}">
              {{csrf_field()}}

                <label for="category" class="col-lg-2 control-label">Category</label>
                <div class="col-lg-1333">
                  <input type="text" class="form-control" id="name" name="category" value="{{$categories->name}}">
                </div><br>
                <button style="float:right; margin-top:20px;" type="submit" class="btn btn-primary">Update</button>
            </form>

          </div>

        </div>
    </div>
</div>
@endsection
