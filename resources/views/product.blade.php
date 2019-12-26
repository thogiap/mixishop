@extends('layout_admin')
@section('content')
    <a href="{{route('createproduct')}}"> Create Product</a>
    <table>
        <h3>Product</h3>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
            <td>Category</td>
            <td>Slug</td>
            <td>Decribe</td>
            <td>Information</td>
            <td>Option</td>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->product_category->name}}</td>
                <td>{{$product->slug}}</td>
                <td>{{$product->describe}}</td>
                <td>{{$product->information}}</td>
                <td>
                    <a href="{{route('editproduct',['id'=> $product->id])}}">Edit</a>
                    <a href="{{route('deleteproduct',['id'=> $product->id])}}">Delete</a>
                </td>

            </tr>
        @endforeach
    </table>
@endsection
