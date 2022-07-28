
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" >
    {{-- select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .sidebar{
            min-height: 1020px;
            color: #333;
        }
        .siderbar-title{
            margin: 1rem;
        }
        .nav-item a {
            color: #333;
            font-size: 1.2rem;
        }
    </style>
     <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
     <script>
       tinymce.init({
         selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
         images_upload_url: '{{route('admin.create')}}',
         plugins: 'code table lists image imagetools',
         toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | image'
       });
     </script>

  </head>

  <body>

    @include('admin.partials.navbar')

    <div class="container-fluid">
      <div class="row">

        @include('admin.partials.siderbar')


        @yield('content')

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
    
    {{-- seclect2 --}}
    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
      $(document).ready(function() {
          $('.js-example-basic-multiple').select2();
      });
    </script>
  
  </body>
</html>
