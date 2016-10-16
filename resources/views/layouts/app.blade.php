<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="/css/app.css" rel="stylesheet"> -->

    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="/vendor/fontawesome/css/font-awesome.min.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="/vendor/animate.css/animate.min.css">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="/vendor/whirl/dist/whirl.css">
    <!-- =============== PAGE VENDOR STYLES ===============-->

    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="/app/css/bootstrap.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="/app/css/app.css" id="maincss">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    <div class="wrapper">
      @include('layouts.app-topnav')
      @include('layouts.app-sidebar')
      @include('layouts.app-offsetnav')
      <section>
          @if(Session::has("success"))
              <div class="alert alert-success">
                  {{ Session::get("success") }}
              </div>
          @endif
          @if(Session::has("danger"))
              <div class="alert alert-danger">
                  {{ Session::get("danger") }}
              </div>
          @endif
          @if(Session::has("warning"))
              <div class="alert alert-warning">
                  {{ Session::get("warning") }}
              </div>
          @endif
        @yield('content')
      </section>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

    <!-- =============== VENDOR SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script src="/vendor/modernizr/modernizr.custom.js"></script>
    <!-- JQUERY-->
    <script src="/vendor/jquery/dist/jquery.js"></script>
    <!-- BOOTSTRAP-->
    <script src="/vendor/bootstrap/dist/js/bootstrap.js"></script>
    <!-- STORAGE API-->
    <script src="/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
    <!-- JQUERY EASING-->
    <script src="/vendor/jquery.easing/js/jquery.easing.js"></script>
    <!-- ANIMO-->
    <script src="/vendor/animo.js/animo.js"></script>
    <!-- LOCALIZE-->
    <script src="/vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- =============== APP SCRIPTS ===============-->
    <script src="/app/js/app.js"></script>
</body>
</html>
