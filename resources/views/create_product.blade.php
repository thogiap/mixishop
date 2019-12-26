@extends('layout_admin')
@section('content')
    <h1> Create Product</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        Name: <input type="text" name="name"> <br>
        Price: <input type="text" name="price"> <br>
        Category: <select name="category_id" id="">
            <option value="">------</option>
            @foreach($category as $cate)
                <option value="{{$cate->id}}">{{$cate->name}}</option>
            @endforeach
        </select> <br>
        Description: <input type="text" name="describe"> <br>
        Information: <input type="text" name="information"> <br>
        <table>
            <tr>
                <td>Size:</td>
                <td>S</td>
                <td>M</td>
                <td>L</td>
                <td>XL</td>
                <td>XXL</td>
            </tr>
            <tr>
                <td>Amount:</td>
                <td><input type="number" size="1px" name="amount[s]"></td>
                <td><input type="number" size="1px" name="amount[m]"></td>
                <td><input type="number" size="1px" name="amount[l]"></td>
                <td><input type="number" size="1px" name="amount[xl]"></td>
                <td><input type="number" size="1px" name="amount[xxl]"></td>

            </tr>
        </table>
        Product-Image: <input type="file" name="image[]"><br>
        Product-Image: <input type="file" name="image[]"><br>
        Product-Image: <input type="file" name="image[]"><br>
        <input type="submit">
    </form>
@endsection
