<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Welcome | Arvind-KYF</title>
        <!-- Favicon-->
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="{{ asset('./plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="{{ asset('./plugins/node-waves/waves.css') }}" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="{{ asset('./plugins/animate-css/animate.css') }}" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="{{ asset('./css/style.css') }}" rel="stylesheet">
        <style media="screen">
        /*
          * Globals
          */
          /* Links */
          a,
          a:focus,
          a:hover {
          color: #fff;
          }
          /* Custom default button */
          .btn-secondary,
          .btn-secondary:hover,
          .btn-secondary:focus {
          color: #333;
          text-shadow: none; /* Prevent inheritance from `body` */
          background-color: #fff;
          border: .05rem solid #fff;
          }
          /*
          * Base structure
          */
          html,
          body {
          height: 100%;
          background-color: #333;
          background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)),url("{{ asset('./util/landing.jpg') }}");
          }
          body {
          color: #fff;
          text-align: center;
          text-shadow: 0 .05rem .1rem rgba(0,0,0,.5);
          }
          /* Extra markup and styles for table-esque vertical and horizontal centering */
          .site-wrapper {
          display: table;
          width: 100%;
          height: 100%; /* For at least Firefox */
          min-height: 100%;
          -webkit-box-shadow: inset 0 0 5rem rgba(0,0,0,.5);
                  box-shadow: inset 0 0 5rem rgba(0,0,0,.5);
          }
          .site-wrapper-inner {
          display: table-cell;
          vertical-align: top;
          }
          .cover-container {
          margin-right: auto;
          margin-left: auto;
          }

          /* Padding for spacing */
          .inner {
          padding: 2rem;
          }
          /*
          * Header
          */
          .masthead {
          margin-bottom: 2rem;
          }
          .masthead-brand {
          margin-bottom: 0;
          }
          .nav-masthead .nav-link {
          padding: .25rem 0;
          font-weight: bold;
          color: rgba(255,255,255,.5);
          background-color: transparent;
          border-bottom: .25rem solid transparent;
          }
          .nav-masthead .nav-link:hover,
          .nav-masthead .nav-link:focus {
          border-bottom-color: rgba(255,255,255,.25);
          }
          .nav-masthead .nav-link + .nav-link {
          margin-left: 1rem;
          }
          .nav-masthead .active {
          color: #fff;
          border-bottom-color: #fff;
          }
          @media (min-width: 48em) {
          .masthead-brand {
            float: left;
          }
          .nav-masthead {
            float: right;
          }
          }
          /*
          * Cover
          */
          .cover {
          padding: 0 1.5rem;
          }
          .cover .btn-lg {
          padding: .75rem 1.25rem;
          font-weight: bold;
          }
          /*
          * Footer
          */
          .mastfoot {
          color: rgba(255,255,255,.5);
          }
          /*
          * Affix and center
          */
          @media (min-width: 40em) {
          /* Pull out the header and footer */
          .masthead {
            position: fixed;
            top: 0;
          }
          .mastfoot {
            position: fixed;
            bottom: 0;
          }
          /* Start the vertical centering */
          .site-wrapper-inner {
            vertical-align: middle;
          }
          /* Handle the widths */
          .masthead,
          .mastfoot,
          .cover-container {
            width: 100%; /* Must be percentage or pixels for horizontal alignment */
          }
          }
          @media (min-width: 62em) {
          .masthead,
          .mastfoot,
          .cover-container {
            width: 42rem;
          }
          }
        </style>
    </head>
    <body class="theme-red">
        <!-- Landing Page content goes here -->
          <!-- Loader -->
          <div class="page-loader-wrapper">
              <div class="loader">
                  <div class="preloader">
                      <div class="spinner-layer pl-red">
                          <div class="circle-clipper left">
                              <div class="circle"></div>
                          </div>
                          <div class="circle-clipper right">
                              <div class="circle"></div>
                          </div>
                      </div>
                  </div>
                  <p>Please wait...</p>
              </div>
          </div>
          <!-- Loader -->
          <!--LandingPage-->
          <div class="site-wrapper">

            <div class="site-wrapper-inner">

              <div class="cover-container">

                <div class="masthead clearfix">
                  <div class="inner">
                    <h3 class="masthead-brand">Arvind</h3>
                    <nav class="nav nav-masthead">
                      @if (Route::has('login'))
                              @auth
                                  <a href="{{ url('/home') }}">Home </a>
                              @else
                                  <a href="{{ route('login') }}">Login </a>
                                  <a href="{{ route('register') }}">Register </a>
                              @endauth
                      @endif
                    </nav>
                  </div>
                </div>

                <div class="inner cover">
                  <h1 class="cover-heading">Arvind Brands</h1>
                  <p class="lead">We are happy to help you to imporve your factory's KPI's</p>
                  <p class="lead">
                    <a href="{{ route('login') }}" class="btn btn-block btn-lg bg-red waves-effect">Get Started</a>
                    <a href="{{ route('register') }}" class="btn btn-block btn-lg btn-default waves-effect">Don't have Account</a>
                  </p>
                </div>

                <div class="mastfoot">
                  <div class="inner">
                    <p>Powered by <a href="">Arvind Care</a>, by <a href="">Narendra Maurya</a>.</p>
                  </div>
                </div>

              </div>

            </div>

          </div>
          <!-- Landing Page-->
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

          $(document).ready(function () {
          'use strict'

          if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement('style')
            msViewportStyle.appendChild(
              document.createTextNode(
                '@-ms-viewport{width:auto!important}'
              )
            )
            document.head.appendChild(msViewportStyle)
          }

        }());

        </script>
    </body>
</html>
