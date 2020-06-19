<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Day la index admin/user';
    }
    public function show(){
        return 'GET Giao diện hiển thị chi tiết 1 user admin/user/show/{?id}';
    }
    public function create(){
        return 'GET Giao diện thêm 1 user vào admin/user/create';
    }
    public function stote(){
        return 'POST dữ liệu vừa thêm lưu vào db vào admin/user/save';
    }
    public function edit(){
        return 'GET Day la giao dien sửa 1 user trong DB qua{$id} admin/user/edit{$id}';
    }
    public function update(){
        return 'POST update lại thông tin vào DB admin/user/update{$id}';
    }
}
