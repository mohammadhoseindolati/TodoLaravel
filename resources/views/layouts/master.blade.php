<!doctype html>
<html lang="en" class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

    <title>List of User</title>

</head>
<body class="d-flex flex-column h-100">

<div class="container pt-4 pb-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <a class="navbar-brand" href="#">HTML CRUD Template</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/todo/create">Create</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search" disabled>
            </form>
        </div>
    </nav>
</div>

@yield('content')

<footer class="footer mt-auto py-3">
    <div class="container pb-5">
        <hr>
        <span class="text-muted">
                    Copyright &copy; 2022 | <a href="https://github.com/mohammadhoseindolati">By Mohammadhossein Dolati</a>
            </span>
    </div>
</footer>


<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
