<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'comment_id'; 
    protected $fillable = [
        'content',
        'is_active',
    ];
    public function users(){
        return $this->belongsTo(User::class,'comment_id');
    }
    public function posts(){
        return $this->belongsTo(Post::class);
    }
    
    
}
