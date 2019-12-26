@extends('layout_admin')
@section('content')
    <form action="{{route('edituser',['id'=>$user->id])}}" method="POST">
        @csrf
        Name: <input type="text" name="name" value="{{$user->name}}"> <br>
        Email: <input type="email" name="email" value="{{$user->email}}"> <br>
        Password: <input type="password" name="password" value="{{$user->password}}"> <br>
        Avatar: <input type="text" name="avatar" value="{{$user->avatar}}"> <br>
        <input type="submit">
    </form>
    @endsection
