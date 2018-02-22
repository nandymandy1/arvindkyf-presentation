<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Arvind-KYF</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Bootstrap Core Css -->
    <link href="{{ asset('./plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="{{ asset('./plugins/node-waves/waves.css') }}" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="{{ asset('./plugins/animate-css/animate.css') }}" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{ asset('./css/style.css') }}" rel="stylesheet">
</head>
<body class="login-page">
    <div id="app">
        @yield('content')
    </div>
    <!-- Scripts -->
    <!-- Jquery Core Js -->
    <script src="{{ asset('./plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core Js -->
    <script src="{{ asset('./plugins/bootstrap/js/bootstrap.js')}}"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('./plugins/node-waves/waves.js')}}"></script>
    <!-- Validation Plugin Js -->
    <script src="{{ asset('./plugins/jquery-validation/jquery.validate.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('./js/admin.js')}}"></script>
    <script src="{{ asset('./js/pages/examples/sign-in.js')}}"></script>
    <script type="text/javascript">
      // fetching the factory script goes here
    </script>
</body>
</html>
