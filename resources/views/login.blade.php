@extends('layout')
@section('content')
    <h1>Login</h1>
    <form action="" method="POST">
        @csrf
        Email: <input type="email" name="email"> <br>
        Password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>
@endsection
