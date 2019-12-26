@extends('layout')
@section('content')
    <h1>Home</h1>
    @if(Auth::user()->is_admin)
    <a href="{{route('listuser')}}"> Listuser</a> <br>
    <a href="{{route('category')}}"> Category</a> <br>
    <a href="{{route('product')}}"> Product</a> <br>
    <a href="{{route('size')}}"> Size</a> <br>
    @endif
@endsection
