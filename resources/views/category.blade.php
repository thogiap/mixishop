@extends('layout_admin')
@section('content')
    <a href="{{route('createcategory')}}"> Create Category</a>
    <table>
        <h3>Category</h3>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Slug</td>
            <td>Price-Min</td>
            <td>Price-Max</td>
            <td>Option</td>
        </tr>
        @foreach($category as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->slug}}</td>
                <td>{{$value->product_category->price}}</td>
                <td>{{$value->price_max}}</td>
                <td>
                    <a href="{{route('editcategory',['id'=> $value->id])}}">Edit</a>
                    <a href="{{route('deletecategory',['id'=> $value->id])}}">Delete</a>
                </td>

            </tr>
        @endforeach
    </table>
@endsection
