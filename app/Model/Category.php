<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';
    protected $fillable = [
        'cate_name',
    ];
    public function users(){
        return $this->belongsToMany('user_id');
    }
}
