@extends('admin.layouts.layout')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container">
    <ul class="list-group">
        @foreach ($pages as $page)
        <li class="list-group-item d-flex justify-content-between align-item-center">
            <a href="#">{{$page->name}}</a>
            <div class="d-flex justify-content-between align-item-left">
                <a class="btn btn-dark" href="{{ route('pages.edit', $page->id) }}">Edit</a>
                <form action="{{ route('pages.destroy',$page->id) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button  onclick="return confirm('are you sure?')" class="btn btn-danger">delete</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</div>

@endsection
