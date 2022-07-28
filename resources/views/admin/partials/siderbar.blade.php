<nav class="sidebar col-md-2 bg-light">
    <h3 class="siderbar-title">Top List</h3>
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="{{route('admin.index')}}">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="shopping-cart"></span>
          Products
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.create')}}">
          <span data-feather="plus"></span>
          Add Product
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('categories.index')}}">
          <span data-feather="tag"></span>
          Categories
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('tags.index')}}">
          <span data-feather="tag"></span>
          Tags
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="message-square"></span>
          Comments
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('settings.edit',1)}}">
          <span data-feather="settings"></span>
          Settings
        </a>
      </li>
    </ul>
  </div>
</nav>
