<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <div class="container-fluid">
       <a class="navbar-brand col-sm-3 col-md-2 mr-0" target="_blank" href="{{route('home')}}">Company name</a>
       <ul class="navbar-nav px-3">
         <li class="nav-item text-nowrap">
           <form action="/logout" method="POST">
               @csrf
               <button class="btn btn-link" >Sign out</button>
           </form>
         </li>
       </ul>
    </div>
   </nav>
