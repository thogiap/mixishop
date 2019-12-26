@extends('layout_admin')
@section('content')
    <table>
        <h3>Size</h3>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Size</td>
            <td>Amount</td>

        </tr>
        @foreach($sizes as $size)
            <tr>
                <td>{{$size->id}}</td>
                <td>{{$size->size_product->name}}</td>
                <td>{{$size->size}}</td>
                <td>{{$size->amount}}</td>

            </tr>
        @endforeach
    </table>
@endsection
