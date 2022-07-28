@extends('admin.layouts')
@section("content")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2">Add Product</h1>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger">
        <p>{{ $errors->first() }}</p>
    </div>
    @endif

    <h3 class="h3">Add category</h3>
    <form action="{{route('categories.store')}}"  enctype="multipart/form-data" method="POST">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">category Name</label>
        <input name="name" type="text" class="form-control"  id="exampleInputEmail1">
      </div>

      <button type="submit" class="btn btn-secondary">Submit</button>


    </form>

    <hr>
    <h3 class="h3">Category list</h3>
    <ul class="list-group">
        @foreach ($cats as $cat)
        <li class="list-group-item"><a href="#">{{$cat->name}}</a></li>
        @endforeach
    </ul>


</main>
@endsection
