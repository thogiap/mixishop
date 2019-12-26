@extends('layout_admin')
@section('content')
    <form action="{{route('editcategory',['id'=>$category->id])}}" method="POST">
        @csrf
        Name: <input type="text" name="name" value="{{$category->name}}"> <br>
        <input type="submit">
    </form>
@endsection
