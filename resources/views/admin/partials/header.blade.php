<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}" />
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
    selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists',
    toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
    });
    </script>
    <title>Document</title>
</head>
<body>
<!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">GorillaPress</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"  href="{{route('admin.create')}}"><i class="lni lni-plus"></i>New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" target="_blank" href="/"><i class="lni lni-home"></i>View Site</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right ms-auto">
                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="btn btn-link" aria-current="page" href="{{ url('/logout') }}"><i class="lni lni-unlock"></i>Logout</button>
                        </form>
                    </li>

                </ul>
        </div>
        </div>
    </nav>
<!-- navbar end -->
