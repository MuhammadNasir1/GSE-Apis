<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - GSE</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .canvasjs-chart-credit {
            display: none;

        }
    </style>
</head>

<body>
    @yield('content')

    <script src="{{ asset('javascript/jquery.js') }}"></script>
    <script src="{{ asset('javascript/canvas.js') }}"></script>
    @yield('js')
</body>



</html>
