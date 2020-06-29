<!DOCTYPE html>
<html lang="en">
@include('layouts/head')
<body>
<div class="table">
<table class="table table-sm table-bordered">
<caption>Đơn Đăng Ký Học</caption>
    <thead>
    <tr>
    <th></th>
      <th colspan="2" class="text-center">ID</th>
      <th colspan="2" class="text-center">Nội dung</th>
      <th colspan="3" class="text-center">Time</th>
    </tr>
    <tr>
        <th>Post_id</th>
        <th>Cate_id</th>
        <th>User_id</th>
        <th>Title</th>
        <th>Content</th>
        <th>At_time</th>
        <th>Update_time</th>
    </tr>
    </thead>

    @foreach($post as $data)
    <tr>
    <td>{{ $data->post_id }}</td>
    <td>{{ $data->cate_id }}</td>
    <td>{{ $data->user_id }}</td>
    <td>{{ $data->title }}</td>
    <td >{{ $data->content }}</td>
    <td>{{ $data->created_at }}</td>
    <td>{{ $data->updated_at }}</td>
    </tr>
    @endforeach
  
</table>
<a class="btn btn-info" href="{{ route('export') }}">Xuất XLS</a>
</div>

</body>
</html>