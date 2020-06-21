<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'content',
    ];
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'cate_id');
    }
    public function comment(){
        return $this->hasMany(Comment::class,'post_id');
    }
}
