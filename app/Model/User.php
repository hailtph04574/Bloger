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
    public function posts(){
        return $this->belongsTo(Post::class,'user_id','post_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'user_id','comment_id');
    }
    public function categorys(){
        return $this->hasMany(Category::class,'user_id');
    }
}
