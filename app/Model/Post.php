<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'post_id'; 
    protected $fillable = [
        'title',
        'content',
    ];
    public function users(){
        return $this->belongsTo(User::class,'post_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function categorys(){
        return $this->hasMany(Category::class);
    }
}
