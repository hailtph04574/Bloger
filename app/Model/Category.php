<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';
    protected $fillable = [
        'cate_name',
    ];
    public function user(){
        return $this->belongsTo('user_id');
    }
    public function post(){
        return $this->hasMany('cate_id','post_id');
    }
}
