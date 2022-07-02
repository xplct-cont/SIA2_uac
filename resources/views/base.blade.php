<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <title>User Access Control</title>
</head>
<body>


     @include('_nav-bar')

     @if(Session::has('Error'))
       <div class="alert alert-danger">
            {{Session::pull('Error')}}

       </div>
       @endif
     <div class="container">
         @yield('content')
     </div>

    <script>
    </script>
</body>
</html>