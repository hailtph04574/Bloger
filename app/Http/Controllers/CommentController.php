<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        return 'Day la index admin/comment';
    }
    public function show(){
        return 'GET Giao diện hiển thị chi tiết 1 comment admin/comment/show/{?id}';
    }
    public function create(){
        return 'GET Giao diện thêm 1 comment vào admin/comment/create';
    }
    public function stote(){
        return 'POST dữ liệu vừa thêm lưu vào db vào admin/comment/save';
    }
    public function edit(){
        return 'GET Day la giao dien sửa 1 comment trong DB qua{$id} admin/comment/edit{$id}';
    }
    public function update(){
        return 'POST update lại thông tin vào DB admin/comment/update{$id}';
    }
    public function delete(){
        return 'POST xóa vào DB admin/comment/delete{$id}';
    }
}
