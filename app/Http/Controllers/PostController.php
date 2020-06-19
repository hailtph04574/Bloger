<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return 'Day la index admin/post';
    }
    public function show(){
        return 'GET Giao diện hiển thị chi tiết 1 post admin/post/show/{?id}';
    }
    public function create(){
        return 'GET Giao diện thêm 1 post vào admin/post/create';
    }
    public function stote(){
        return 'POST dữ liệu vừa thêm lưu vào db vào admin/post/save';
    }
    public function edit(){
        return 'GET Day la giao dien sửa 1 post trong DB qua{$id} admin/post/edit{$id}';
    }
    public function update(){
        return 'POST update lại thông tin vào DB admin/post/update{$id}';
    }
}
