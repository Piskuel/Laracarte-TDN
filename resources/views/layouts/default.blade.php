<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/fontawesome/css/all.css') }}">
    <title>{{ page_title($title ?? '') }}</title>

    <style>
        footer{
            margin: 4em 0;
        }
        .active{
            background-color: #ccc;
        }
    </style>
</head>
<body>
    @include('layouts.partials._nav')
    @yield('content')


    @include('layouts.partials._footer')
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/fontawesome/js/all.js') }}"></script>
</body>
</html>
