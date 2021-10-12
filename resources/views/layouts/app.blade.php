<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon-->
    <link rel="icon" type="image/jpg" href="imagenes/logo-enlace-libre.png">

    <!-- link a bootstrap, sweetalert2  y Datatables-->
    <link rel="stylesheet" href="bootstrap-local/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap/PULSE-bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="sweetAlert2/sweetalert2.min.css"> -->
    <link rel="stylesheet" href="animatecss/animate.min.css">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="fontawesome-free-5.15.2-web/css/all.min.css">

    <title>Biblioteca EnlaceLibre</title>

</head>
<body>
    <div id="app">

        <main>
            @yield('contenido_app')
        </main>
    </div>

<!-- #region ZONA DE SCRIPTS -->

    <!-- FONT AWESOME PARA ICONOS -->
    <script src="fontawesome-free-5.15.2-web/js/all.min.js"></script>

    <!-- scripts a Jquery, bootstrap, sweetAlert2 y DataTables  -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-local/js/bootstrap.min.js"></script>
    <!-- <script src="sweetAlert2/sweetalert2.all.min.js"></script> -->
<!-- #endregion -->

</body>
</html>
