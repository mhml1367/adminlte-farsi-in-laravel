<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield ("title","مدیریت")</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="_token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="/dist/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/dist/css/rtl.css">
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="/css/master.css">
  <link rel="stylesheet" href="/css/animate.css">

@yield ("css")
</head>

<body class="hold-transition skin-blue sidebar-mini">

   
    <div class="spinner-wrapper" id="loading">
        <div class="spinner"></div>
        <div class="spinner">
           <div class="rect1"></div>
           <div class="rect2"></div>
           <div class="rect3"></div>
           <div class="rect4"></div>
           <div class="rect5"></div>
        </div>
     </div>





      <div class="wrapper">

        <!-- Header -->
        @include("layouts.header")
        <!-- sidebar -->
        @include('layouts.sidebar')

        <!-- Page content -->
            <div class="content-wrapper">

               @yield ("content")

            </div>

        @include('layouts.footer')

        <div class="control-sidebar-bg"></div>

      </div>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="/js/master.js"></script>
  <script src="/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/dist/js/adminlte.min.js"></script>
@yield ("js")

    

</body>
</html>