@extends('layout_admin')
@section('content')
    <table>
        <h3>ListUser</h3>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Avatar</td>
            <td>Option</td>
        </tr>
        @foreach($user as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->password}}</td>
                <td>{{$value->avatar}}</td>
                <td>
                    <a href="{{route('edituser',['id'=> $value->id])}}">Edit</a>
                    <a href="{{route('deleteuser',['id'=> $value->id])}}">Delete</a>
                </td>

            </tr>
        @endforeach
    </table>

@endsection
