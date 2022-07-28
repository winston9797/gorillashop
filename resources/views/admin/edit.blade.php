
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
<form action="{{ route('admin.update',$post->id) }}" method="POST" >
    @method('PUT')
    @csrf
    <div class="mb-3">

        <label for="cat" class="form-label">Categories : </label>
        <select name="cat" class="form-control mb-3">
            @foreach ($cat as $c)
                <option value={{$c->id}}>{{$c->name}}</option>
            @endforeach
        </select>

        <label for="name" class="form-label">Post Title : </label>
        <input name='name' type="text" class="form-control"  value="{{$post->name}}" id="name">
    </div>
    <textarea id="myeditorinstance" name="content" placeholder="post name" >{{$post->content}}</textarea>


    <br>
    <input class="btn btn-dark mt-3" type="submit"  name="" id="">

</form>

@endsection
