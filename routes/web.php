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
    $user = User::all();
    $post = Post::all();
    $category = Category::all();
    $comment = Comment::all();
    return view('welcome',[
        'user'=> $user,
        'post'=> $post,
        'category'=> $category,
        'comment'=> $comment,
        ]);
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

Route::group(['prefix' => 'admin/'], function(){

    Route::group(['prefix' => 'user'],function(){
        Route::get('/','UserController@index')->name('user.index');
        Route::get('show','UserController@show')->name('user.show');
        Route::get('create','UserController@create')->name('user.create');
        Route::get('stote','UserController@stote')->name('user.stote');
        Route::get('edit','UserController@edit')->name('user.edit');
        Route::get('update','UserController@update')->name('user.update');
    });

    Route::group(['prefix' => 'category'],function(){
        Route::get('/','CategoryController@index')->name('category.index');
        Route::get('show','CategoryControllerController@show')->name('category.show');
        Route::get('create','CategoryControllerController@create')->name('category.create');
        Route::get('stote','CategoryControllerController@stote')->name('category.stote');
        Route::get('edit','CategoryControllerController@edit')->name('category.edit');
        Route::get('update','CategoryControllerController@update')->name('category.update');
    });
    
    Route::group(['prefix' => 'comment'],function(){
        Route::get('/','CommentController@index')->name('comment.index');
        Route::get('show','CommentControllerController@show')->name('comment.show');
        Route::get('create','CommentControllerController@create')->name('comment.create');
        Route::get('stote','CommentControllerController@stote')->name('comment.stote');
        Route::get('edit','CommentControllerController@edit')->name('comment.edit');
        Route::get('update','CommentControllerController@update')->name('comment.update');
    });

    Route::group(['prefix' => 'post'],function(){
        Route::get('/','PostController@index')->name('post.index');
        Route::get('show','PostControllerController@show')->name('post.show');
        Route::get('create','PostControllerController@create')->name('post.create');
        Route::get('stote','PostControllerController@stote')->name('post.stote');
        Route::get('edit','PostControllerController@edit')->name('post.edit');
        Route::get('update','PostControllerController@update')->name('post.update');
    });
    
    
});




