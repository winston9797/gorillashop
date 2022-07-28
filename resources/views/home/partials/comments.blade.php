 <!-- Comments section-->
 <section class="mb-5">
    <div class="card bg-light">
        <div class="card-body">
            <!-- Comment form-->
            <form class="mb-4" action="{{route('comment.store', ['id' => $product->id])}}" method="POST">
                @csrf 
                <input class="form-control" type="text" name="name" placeholder="you name">
                <br>
                <div class="form-check">
                    <input name="review" class="form-check-input" type="checkbox" value="5" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </label>
                </div>
                <div class="form-check">
                    <input name="review" class="form-check-input" type="checkbox" value="4" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-secondary"></i>
                    </label>
                </div>
                <div class="form-check">
                    <input name="review" class="form-check-input" type="checkbox" value="3" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-secondary"></i>
                        <i class="fa-solid fa-star text-secondary"></i>
                    </label>
                </div>
                <div class="form-check">
                    <input name="review" class="form-check-input" type="checkbox" value="2" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-secondary"></i>
                        <i class="fa-solid fa-star text-secondary"></i>
                        <i class="fa-solid fa-star text-secondary"></i>
                    </label>
                </div>
                <div class="form-check">
                    <input name="review" class="form-check-input" type="checkbox" value="2" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-secondary"></i>
                        <i class="fa-solid fa-star text-secondary"></i>
                        <i class="fa-solid fa-star text-secondary"></i>
                    </label>
                </div>
                <div class="form-check">
                    <input name="review" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-secondary"></i>
                        <i class="fa-solid fa-star text-secondary"></i>
                        <i class="fa-solid fa-star text-secondary"></i>
                        <i class="fa-solid fa-star text-secondary"></i>
                    </label>
                </div>

                  <br>
                <textarea name="body" class="form-control" rows="3" placeholder="leave a review!"></textarea>
                <br>
                <button class="btn btn-secondary">submit</button>
            </form>
            @if($errors->any())
    <div class="alert alert-danger">
        <p>{{ $errors->first() }}</p>
    </div>
    @endif
            <!-- Single comment-->
            @foreach ($product->comments as $comment)
            <div class="d-flex">
                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                <div class="ms-3">
                    <div class="fw-bold">{{$comment->name}}</div>
                    @switch($comment->review)
                        @case(5)
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                        </div>
                            @break
                        @case(4)
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-dark"></i>
                        </div>
                            @break
                        @case(3)
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-dark"></i>
                            <i class="fa-solid fa-star text-dark"></i>
                        </div>
                            @break
                        @case(2)
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-dark"></i>
                            <i class="fa-solid fa-star text-dark"></i>
                            <i class="fa-solid fa-star text-dark"></i>
                        </div>
                            @break
                        @case(1)
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-dark"></i>
                            <i class="fa-solid fa-star text-dark"></i>
                            <i class="fa-solid fa-star text-dark"></i>
                            <i class="fa-solid fa-star text-dark"></i>
                        </div>
                            @break
                        @default   
                    @endswitch
                    {{$comment->body}}
                </div>
            </div>
            <br>
            @endforeach
            
        </div>
    </div>
</section>