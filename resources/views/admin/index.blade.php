@extends('app')
@section('title','Index Admin')
@section('content')
    <table style="border: 1px solid black; border-collapse: collapse;">
    <caption>User</caption>
        <td>
            <thead>
                <th>Name</th>
                <th>Birthday</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Is_active</th>
            </thead>
            @foreach($user as $key => $data)
            <tr>
                <td>{{ $data -> name }}</td>
                <td>{{ $data -> birthday }}</td>
                <td>{{ $data -> phone }}</td>
                <td>{{ $data -> email }}</td>
                <td>{{ $data -> password }}</td>
                <td>{{ $data -> role }}</td>
                <td>{{ $data -> is_active }}</td>
            </tr>
            @endforeach
        </td>
    </table>

    <table style="border: 1px solid black; border-collapse: collapse;">
    <caption>Post</caption>
        <td>
            <thead>
                <th>Title</th>
                <th>Content</th>
                <th>Cate_id</th>
                <th>User_id</th>
            </thead>
            @foreach($post as $key => $data)
            <tr>
                <td>{{ $data -> title }}</td>
                <td>{{ $data -> content }}</td>
                <td>{{ $data -> cate_id }}</td>
                <td>{{ $data -> user_id }}</td>
            </tr>
            @endforeach
        </td>
    </table>
    <table style="border: 1px solid black; border-collapse: collapse;">
    <caption>Category</caption>
        <td>
            <thead>
                <th>Cate_Id</th>
                <th>User_Id</th>
                <th>Cate_Name</th>
            </thead>
            @foreach($category as $key => $data)
            <tr>
                <td>{{ $data -> cate_id }}</td>
                <td>{{ $data -> user_id }}</td>
                <td>{{ $data -> cate_name }}</td>
            </tr>
            @endforeach
        </td>
    </table>
    <table style="border: 1px solid black; border-collapse: collapse;">
    <caption>Comment</caption>
        <td>
            <thead>
                <th>Comment_ID</th>
                <th>Post_ID</th>
                <th>Content</th>
                <th>User_ID</th>
                <th>Is_Active</th>
            </thead>
            @foreach($comment as $key => $data)
            <tr>
                <td>{{ $data -> comment_id }}</td>
                <td>{{ $data -> post_id }}</td>
                <td>{{ $data -> content }}</td>
                <td>{{ $data -> user_id }}</td>
                <td>{{ $data -> is_active }}</td>
            </tr>
            @endforeach
        </td>
    </table>
@endsection
