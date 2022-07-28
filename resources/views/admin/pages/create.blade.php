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
<form enctype="multipart/form-data"  action={{route('pages.store')}} method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Page Title : </label>
        <input name='name' type="text" class="form-control" id="name">
    </div>
    <textarea name="content" id="myeditorinstance"></textarea>

    <br>
    <input class="btn btn-dark mt-3" type="submit"  name="" id="">

</form>

@endsection
