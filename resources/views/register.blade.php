@extends('layout')
@section('content')
    <h1>Register</h1>
    <form action="" method="POST">
        @csrf
        Name: <input type="text" name="name"> <br>
        Email: <input type="email" name="email"> <br>
        Password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>
@endsection
