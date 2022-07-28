@extends('admin.layouts')
@section("content")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger">
        <p>{{ $errors->first() }}</p>
    </div>
    @endif


            <table class="table">
                @if($products->count() > 0)
                <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">delete</th>
                      <th scope="col">title</th>
                      <th scope="col">created</th>
                      <th scope="col">updated</th>
                    </tr>
                  </thead>
                  @endif
                <tbody>
                    @if($products->count() > 0)
                    @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>
                            <form action="{{route('admin.destroy',$product->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="confirm('Want to delete?')" class="text-danger btn btn-link">x</button>
                            </form>
                        </td>
                        <td><a href="{{route('admin.edit',$product->slug)}}">{{$product->name}}</a></td>
                        <td><span class="text-muted ml-auto p-2">{{$product->created_at->diffForHumans() }}</span></td>
                        <td><span class="text-muted ml-auto p-2">{{$product->updated_at->diffForHumans() }}</span></td>
                      </tr>

                    @endforeach
                </tbody>
              </table>
                @else
                    <div class="alert alert-dark">
                        No Posts to be found
                    </div>
                @endif
        </div>
    </div>
    </main>
@endsection
