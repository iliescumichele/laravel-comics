<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>DC</title>

    <style>

        h1{
            padding: 50px;
        }

        main{
            background-color: aqua;
        }
    </style>
</head>
<body>
    @include('partials.header')

    
    @yield('content-movies')


    @include('partials.footer')
</body>
</html>