@extends('home.layout')
@section('content')
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                @foreach ($product as $product)                    
                <!-- Post content-->
                @foreach ($product->tags as $tag)
                <a class="text-decoration-none link-dark" href="#!">{{$tag->name}} > </a>
                @endforeach
                
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        
                        <!-- Post categories-->
                        <a class="badge bg-primary text-decoration-none link-light" href="#!">{{$product->category->name}}</a>
                       
                    </header>
                    <!-- Preview image figure-->
                   <div class="row">
                    <div class="col"><figure class="mb-2"><img class="img-fluid rounded" src="{{Storage::url(''.$product->image)}}" alt="..." /></figure></div>
                    <div class="col card product-card">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{$product->name}}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">{{$product->created_at}}</div>
                        <button type="button" class="btn btn-success mt-3">
                            <img  style="width: 20px" src="{{asset('assets/wtsp.svg')}}">

                            Order Now (whatsapp)</button>
                    </div>
                   </div>
                    <!-- Post content-->
                    <div class="card mb-5">
                        <div class="card-header">
                            description
                        </div>
                        <div class="card-body">
                            {!! html_entity_decode($product->description) !!}
                        </div>
                    </div>
                </article>

               
                @include('home.partials.comments')
                @endforeach

            </div>
            @include('home.partials.siderbar')
        </div>
    </div>
@endsection

