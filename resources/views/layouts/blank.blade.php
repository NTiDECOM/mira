<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Mira - @yield('title')</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="/vendor/fontawesome/css/font-awesome.min.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="/app/css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="/app/css/app.css" id="maincss">
</head>

<body>
   <div class="wrapper">
      <div class="row" style="margin-top: 15px;">
        <div class="col-md-6 col-md-offset-3">
          @if (session('success'))
          <div role="alert" class="alert alert-success text-center">
             {{ session('success') }}
             <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                <span aria-hidden="true">&times;</span>
             </button>
           </div>
           @endif
        </div>
      </div>
      <div class="block-center mt-xl wd-xl">
         @yield('content')
         <div class="p-lg text-center">
            <span>&copy;</span>
            <span>2016</span>
            <span>-</span>
            <span>NTi</span>
            <br>
            <span>Federação Espírita Paraibana</span>
         </div>
      </div>
   </div>
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="/vendor/modernizr/modernizr.custom.js"></script>
   <!-- JQUERY-->
   <script src="/vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="/vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
   <!-- PARSLEY-->
   <script src="/vendor/parsleyjs/dist/parsley.min.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="/app/js/app.js"></script>
   <!-- PARSLEY-->
   <script src="/vendor/parsleyjs/dist/parsley.min.js"></script>
   <!-- INPUT MASK-->
   <script src="/vendor/jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>
   <script src="/js/registration.js"></script>
</body>

</html>
