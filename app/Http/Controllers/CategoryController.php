<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return 'Day la index admin/category';
    }
    public function show(){
        return 'GET Giao diện hiển thị chi tiết 1 category admin/category/show/{?id}';
    }
    public function create(){
        return 'GET Giao diện thêm 1 category vào admin/category/create';
    }
    public function stote(){
        return 'POST dữ liệu vừa thêm lưu vào db vào admin/category/save';
    }
    public function edit(){
        return 'GET Day la giao dien sửa 1 category trong DB qua{$id} admin/category/edit{$id}';
    }
    public function update(){
        return 'POST update lại thông tin vào DB admin/category/update{$id}';
    }
}
