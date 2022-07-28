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
    @if ($message = Session::get('fail'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger">
        <p>{{ $errors->first() }}</p>
    </div>
    @endif
    <form action="{{route('admin.store')}}"  enctype="multipart/form-data" method="POST">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Product Name</label>
        <input  name="name" type="text" class="form-control" id="title">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Price :</label>
        <input name="price" type="number" class="form-control" id="exampleInputEmail1">
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input name="image" class="form-control" type="file" id="formFile">
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category :</label>
        <select name='cat_id' class="form-select" id="inputGroupSelect01">
          @foreach ($cats as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="tags" class="form-label">tags :</label>
        <select name='tags[]' class="form-select js-example-basic-multiple" id="inputGroupSelect01" multiple='multiple'>
          @foreach ($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
          @endforeach
        </select>
      </div>
      {{-- <div class="mb-3">
        <label for="tags" class="form-label">Product Description :</label>
        <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
      </div> --}}
      <div class="mb-3">
        <label for="tags" class="form-label">Product Description :</label>
        <textarea name="description" id="myeditorinstance">Hello, World!</textarea>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Slug</label>
        <input name="slug" type="text" class="form-control" id="slug">
        <a class="btn btn-link text-secondary" onclick="fillSlug()" alt='generate slug based on title'>generate slug</a>
      </div>
      <button type="submit" class="btn btn-secondary">Submit</button>
    </form>

    {{-- generate seo freindly slug based on title valu --}}
    <script>
        function fillSlug(){
            const title = document.getElementById("title").value;
            document.getElementById("slug").value = title.replaceAll(' ','-');
        }
    </script>

</main>
@endsection
