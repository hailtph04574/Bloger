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
    $test = User::with(['post','category','comment'])->get();
    // dd($test);
    $user = User::all();
    $post = Post::all();
    $category = Category::all();
    $comment = Comment::all();
    // dd($user);
    return view('welcome',[
        'user'=> $user,
        'post'=> $post,
        'category'=> $category,
        'comment'=> $comment,
        ]);
});
Route::get('/admin', function(){
    
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

Route::group(['prefix' => 'admin/'], function(){

    Route::group(['prefix' => 'user'],function(){
        Route::get('/','UserController@index')->name('user.index');
        Route::get('show','UserController@show')->name('user.show');
        Route::get('create','UserController@create')->name('user.create');
        Route::get('stote','UserController@stote')->name('user.save');
        Route::get('edit','UserController@edit')->name('user.edit');
        Route::get('update','UserController@update')->name('user.update');
        Route::get('delete','UserController@update')->name('user.delete');
    });

    Route::group(['prefix' => 'category'],function(){
        Route::get('/','CategoryController@index')->name('category.index');
        Route::get('show','CategoryController@show')->name('category.show');
        Route::get('create','CategoryController@create')->name('category.create');
        Route::get('stote','CategoryController@stote')->name('category.save');
        Route::get('edit','CategoryController@edit')->name('category.edit');
        Route::get('update','CategoryController@update')->name('category.update');
        Route::get('delete','CategoryController@update')->name('category.delete');
    });
    
    Route::group(['prefix' => 'comment'],function(){
        Route::get('/','CommentController@index')->name('comment.index');
        Route::get('show','CommentController@show')->name('comment.show');
        Route::get('create','CommentController@create')->name('comment.create');
        Route::get('stote','CommentController@stote')->name('comment.save');
        Route::get('edit','CommentController@edit')->name('comment.edit');
        Route::get('update','CommentController@update')->name('comment.update');
        Route::get('delete','CommentController@update')->name('comment.delete');
    });

    Route::group(['prefix' => 'post'],function(){
        Route::get('/','PostController@index')->name('post.index');
        Route::get('show','PostController@show')->name('post.show');
        Route::get('create','PostController@create')->name('post.create');
        Route::get('stote','PostController@stote')->name('post.save');
        Route::get('edit','PostController@edit')->name('post.edit');
        Route::get('update','PostController@update')->name('post.update');
        Route::get('delete','PostController@update')->name('post.delete');
    });
    
    
});




