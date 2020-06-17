<?php

use Illuminate\Support\Facades\Route;
use App\Model\User;
use App\Model\Post;
use App\Model\Category;
use App\Model\Comment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function(){
    $test = User::with(['posts','comments','categorys'])->get();
    // dd($test);
    $user = User::all();
    $post = Post::all();
    $category = Category::all();
    $comment = Comment::all();

    return view('admin.index',[
        'user'=> $user,
        'post'=> $post,
        'category'=> $category,
        'comment'=> $comment,
        ]);
})->name('admin.index');
