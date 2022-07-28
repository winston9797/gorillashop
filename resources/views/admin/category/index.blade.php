@extends('admin.layouts.layout')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container">
    <ul class="list-group">
        @foreach ($cats as $cat)
        <li class="list-group-item d-flex justify-content-between align-item-center">
            <a href="#">{{$cat->name}}</a>
            <div class="d-flex justify-content-between align-item-left">
                <form action="{{ route('category.destroy',$cat->id) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button onclick="return confirm('are you sure?')" class="btn btn-danger">delete</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</div>

@endsection
