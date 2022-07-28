@extends('admin.layouts.layout')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form enctype="multipart/form-data"  action="{{route('admin.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Post Title : </label>
        <input name='name' type="text" class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Post Featured image : </label>
        <input name="file" class="form-control" type="file" name="" id="">
      </div>
    <textarea name="content" id="myeditorinstance"></textarea>
    <label for="cat" class="form-label">Categories : </label>
    <select name="cat_id" class="form-control mb-3">
        @foreach ($cat as $c)
            <option value={{$c->id}}>{{$c->name}}</option>
        @endforeach
    </select>
    <br>
    <input class="btn btn-dark mt-3" type="submit"  name="" id="">

</form>

@endsection
