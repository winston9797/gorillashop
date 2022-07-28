@extends('admin.layouts.layout')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container">
    <ul class="list-group">
        @if($posts->isEmpty())
        <div class="alert alert-dark" role="alert">
            There are no posts please add a post to view it here
          </div>
        @elseif (!$posts->isEmpty())
        @foreach ($posts as $post)
        <!-- post  -->
        <li class="list-group-item">
        <form class="form-button" style="" action="{{ route('admin.destroy',$post->id) }}" method="POST">
            @method('delete')
            @csrf
            <button  onclick="return confirm('are you sure?')" class="btn btn-link"><i class="lni lni-trash-can text-danger"></i></button>
        </form>
          <a href="{{ route('admin.edit', $post->id) }}">{{$post->name}}</a> <a href=""><span class="text-muted float-end">  in : ( {{$post->category->name}} )</span> </a>
          <span class="text-muted float-end">2 hours ago- </span>
        </li>
         <!-- post  -->
         @endforeach
        @endif
      </ul>
</div>

@endsection
