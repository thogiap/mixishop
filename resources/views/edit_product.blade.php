@extends('layout_admin')
@section('content')
    <form action="{{route('editproduct',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        Name: <input type="text" name="name" value="{{$product->name}}"> <br>
        Price: <input type="text" name="price" value="{{$product->price}}"> <br>
        Category: <select name="category_id" id="">
            <option value="">------</option>
            @foreach($category as $cate)
                <option value="{{$cate->id}}" {{($cate->id == $product_category)?"selected" : ""}}>
                    {{$cate->name}}
                </option>
            @endforeach
        </select> <br>
        Describe: <input type="text" name="describe" value="{{$product->describe}}"> <br>
        Information: <input type="text" name="information" value="{{$product->information}}"> <br>
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
                @foreach($product->size as $size)
                <td><input type="number" size="1px" name="amount[{{$size->size}}]" value="{{$size->amount}}"></td>
                @endforeach
            </tr>
        </table>
        @foreach($product->product_image as $image)

            @endforeach
        Product-Image: <input type="file" name="image[]"><br>
        Product-Image: <input type="file" name="image[]"><br>
        Product-Image: <input type="file" name="image[]"><br>
        <input type="submit">
    </form>
@endsection
