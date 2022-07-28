
@include('admin.partials.header')

<!-- body start -->
<div class="container">
    <div class="row">
      <!-- siderbar start -->
      <div class="col-3  sidebar">
      <h1 class="mt-3">Dashboard</h1>
      <ul class="side-nav mt-3">
        <li><a href="{{route("settings.index")}}"><i class="lni lni-construction-hammer"></i>Settings</a></li>
        <li><a href="{{route('admin.index')}}"><i class="lni lni-files"></i>Posts</a></li>
        <li><a href="{{route('admin.create')}}"><i class="lni lni-plus"></i>Add Post</a></li>
        <li><a href="{{route('category.index')}}"><i class="lni lni-tag"></i>Categories</a></li>
        <li><a href="{{route('category.create')}}"><i class="lni lni-plus"></i>Add Category</a></li>
        <li><a href="{{route('pages.index')}}"><i class="lni lni-notepad"></i>Pages</a></li>
        <li><a href="{{route('pages.create')}}"><i class="lni lni-plus"></i>Add Page</a></li>
      </ul>
      </div>
       <!-- siderbar end -->
       <!-- mainarea start -->
      <div class="col-7 main-area  mr-3">
        <h1 class="mainHeading mt-3"><i class="lni lni-files ml-3"></i>Post list :</h1>
        @yield('content')
      </div>
      <!-- mainarea end -->
    </div>
  </div>
</body>
</html>
