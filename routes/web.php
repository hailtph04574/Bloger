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
        Route::get('show/{user_id}','UserController@show')->name('user.show');
        Route::get('create','UserController@create')->name('user.create');
        Route::get('stote','UserController@stote')->name('user.save');
        Route::get('edit/{user_id}','UserController@edit')->name('user.edit');
        Route::post('update/{user_id}','UserController@update')->name('user.update');
        Route::get('delete/{user}','UserController@delete')->name('user.delete');
    });

        
    
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
