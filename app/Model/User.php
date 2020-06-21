<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name',
        'birthday',
        'phone',
        'email',
        'password',
        'role',
        'is_active',
    ];
    public function post(){
        return $this->hasMany(Post::class,'user_id','post_id');
    }
    public function comment(){
        return $this->hasMany(Comment::class,'user_id','comment_id');
    }
    public function category(){
        return $this->hasMany(Category::class,'user_id','category_id');
    }
}
