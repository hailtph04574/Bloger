<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id'; 
    protected $fillable = [
        'name',
        'birthday',
        'phone',
        'email',
        'password',
        'role',
        'is_active',
    ];
    public function posts(){
        return $this->hasMany(Post::class,'post_id','user_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'comment_id','user_id');
    }
    public function categorys(){
        return $this->hasMany(Category::class,'cate_id','user_id');
    }
}
