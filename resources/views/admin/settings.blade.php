@extends('admin.layouts.layout')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@foreach ($infos as $info)
    <form enctype="multipart/form-data"  action="{{route('settings.update',$info->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Website Name : </label>
            <input name='name' type="text" class="form-control" id="name" value={{$info->name}}>
        </div>
        <label for="desc" class="form-label">Website Description : </label>
        <textarea class="form-control"   name="desc" >{{$info->desc}}</textarea>
        <br>
        <input class="btn btn-dark mt-3" type="submit"  name="" id="">

    </form>
@endforeach
@endsection
