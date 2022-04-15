<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="d-flex justify-content-center align-items-center flex-column">
        <header class="w-50">
            <nav class="">
                <ul class="list-group d-flex flex-row">
                    <li class="list-group-item"><a class="nav-link" href="{{ route('post.index') }}">Home</a></li>
                    <li class="list-group-item"><a class="nav-link" href="{{ route('post.create') }}">Create</a></li>
                    <li class="list-group-item"><a class="nav-link" href="">Something</a></li>
                </ul>
            </nav>
        </header>
        @yield('content')
        <script type="module" src="{{'js/app.js'}}"></script>
    </body>
</html>
