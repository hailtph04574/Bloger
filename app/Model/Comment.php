<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'content',
        'is_active',
    ];
    public function posts(){
        return $this->belongsToMany(Post::class,'post_id');
    }
    public function users(){
        return $this->belongsToMany(User::class,'user_id');
    }

}
