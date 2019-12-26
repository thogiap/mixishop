<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="row">
    <div class="col-4">
        <h1><a href="{{route('home')}}">Home</a></h1>
    </div>
    <div class="col-8">
        @if(Auth::check())
            <a href="{{route('logout')}}"> Logout</a>
        @else
            <a href="{{route('register')}}"> Register</a>
            <a href="{{route('login')}}"> Login</a>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-4">
        @include('sidebar')
    </div>
    <div class="col-8">
        @yield('content')
    </div>
</div>

</body>
</html>
