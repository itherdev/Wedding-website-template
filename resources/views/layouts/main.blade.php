 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <title>@yield('title')</title>
  </head>
  <body>

    @yield('container')

    
 <!-- JavaScript;  -->



    @stack('before-scripts')
    <!-- General JS Scripts -->
    <script src="{{asset('assets/modules/jquery.min.js')}}"></script>
    <script src="{{asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/modules/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/modules/moment.min.js')}}"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    @stack('after-scripts')
  </body>
</html>