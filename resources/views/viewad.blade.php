<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title> @yield('title') </title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
  <link rel="icon" href="{{ asset('./favicon.ico') }}" type="image/x-icon"/>
  <link rel="shortcut icon" href="{{ asset('./favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    
    <!-- CSS files -->
  <link href="{{ asset('./dist/css/tabler.min.css') }}" rel="stylesheet"/>
  <link href="{{ asset('./dist/css/demo.min.css') }}" rel="stylesheet"/>
    <style>
      body {
      	display: none;
      }
    </style>
  </head>
  <body class="antialiased">
    <div class="page">
      @include('adlayouts/header')
      @include('adlayouts/nav')

      <div class="content">
        <div class="container-xl d-flex flex-column justify-content-center">
        @yield('content')  
        </div>
        @include('adlayouts/footer')
      </div>
    </div>
    {{-- Sweet Alert JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    <!-- Libs JS -->
<script src="{{ asset('./dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Tabler Core -->
<script src="{{ asset('./dist/js/tabler.min.js') }}"></script>
    <script>
      document.body.style.display = "block"
    </script>
  </body>
</html>