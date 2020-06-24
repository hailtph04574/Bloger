<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';
    protected $primaryKey = 'cate_id'; 
    protected $fillable = [
        'cate_name',
    ];
    public function users(){
        return $this->belongsTo(User::class,'cate_id');
    }
    public function posts(){
        return $this->belongsTo(Post::class,'cate_id');
    }
}
