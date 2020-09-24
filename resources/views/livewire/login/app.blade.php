<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesión para usuarios de la empresa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}"></script>
     <script src="{{ asset('js/plantilla.js') }}"></script>

     <!-- Styles -->
     <link href="{{ asset('css/plantilla.css') }}" rel="stylesheet">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 

    @livewireStyles
</head>

<body>
    <div class="mt-5">
        @yield('content')
    </div>



    @livewireScripts
</body>

</html>
