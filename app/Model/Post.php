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
        return $this->hasMany('post_id','user_id');
    }
    public function categorys(){
        return $this->belongsTo('post_id','cate_id');
    }
    public function comments(){
        return $this->hasMany('post_id','comment_id');
    }
}
