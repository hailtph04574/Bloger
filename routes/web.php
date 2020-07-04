<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
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
    // $user1 = Auth::user();
        $test = User::with(['posts','comments','categorys'])->get();
    // dd($test);
    $user = User::all();
    $post = Post::all();
    $category = Category::all();
    $comment = Comment::all();
    // dd($user);
    return view('welcome',[
        'user'=> $test,
        'post'=> $test,
        'category'=> $test,
        'comment'=> $test,
        ]);
});

Route::get('admin', function(){
    
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

Route::group(['prefix'=>'admin/'],function(){
    Route::group(['prefix' => 'user'],function(){
        Route::get('/','UserController@index')->name('user.index');
        Route::get('show/{user_id}','UserController@show')->name('user.show');
        Route::get('create','UserController@create')->name('user.create');
        Route::get('stote','UserController@stote')->name('user.save');
        Route::get('edit/{user_id}','UserController@edit')->name('user.edit');
        Route::post('update/{user_id}','UserController@update')->name('user.update');
        Route::get('delete/{user}','UserController@delete')->name('user.delete');
    });
    Route::group(['prefix' => 'post'],function(){
        Route::get('/','PostController@index')->name('post.index');
        Route::get('show/{post_id}','PostController@show')->name('post.show');
        Route::get('create','PostController@create')->name('post.create');
        Route::get('stote','PostController@stote')->name('post.save');
        Route::get('edit/{post_id}','PostController@edit')->name('post.edit');
        Route::post('update/{post_id}','PostController@update')->name('post.update');
        Route::get('delete/{post}','PostController@delete')->name('post.delete');
    });

    Route::group(['prefix' => 'category'],function(){
        Route::get('/','CategoryController@index')->name('category.index');
        Route::get('show/{post_id}','CategoryController@show')->name('category.show');
        Route::get('create','CategoryController@create')->name('category.create');
        Route::get('stote','CategoryController@stote')->name('category.save');
        Route::get('edit/{cate_id}','CategoryController@edit')->name('category.edit');
        Route::post('update/{cate_id}','CategoryController@update')->name('category.update');
        Route::get('delete/{category}','CategoryController@delete')->name('category.delete');
    });

    Route::group(['prefix' => 'comment'],function(){
        Route::get('/','CommentController@index')->name('comment.index');
        Route::get('show/{post_id}','CommentController@show')->name('comment.show');
        Route::get('create','CommentController@create')->name('comment.create');
        Route::get('stote','CommentController@stote')->name('comment.save');
        Route::get('edit/{comment_id}','CommentController@edit')->name('comment.edit');
        Route::post('update/{comment_id}','CommentController@update')->name('comment.update');
        Route::get('delete/{comment}','CommentController@delete')->name('comment.delete');
    });
});
Route::get('show', 'ExportController@show')->name('show');
Route::get('export', 'ExportController@export')->name('export');
