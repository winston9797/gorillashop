@extends('layouts.layout')

@section('content')
<!-- content area -->
<div class="container">
    <div class="row">
        <div class="col-8">
            @foreach ($posts as $post)
            <div class="card post-card">
                <img class="card-img-top" src='<?php echo asset('storage/file.txt'); ?>' alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="#">{{$post->name}}</a></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-secondary">Go somewhere</a>
                </div>
            </div>
            @endforeach

            <!-- pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
            <!-- pagination -->
        </div>
        @include('partials.siderbar')
    </div>
</div>
<!-- content area -->
@endsection
