@extends('layout_admin')
@section('content')
    <h1> Create Category</h1>
    <form action="" method="POST">
        @csrf
        Name: <input type="text" name="name"> <br>
        <input type="submit">
    </form>
@endsection
