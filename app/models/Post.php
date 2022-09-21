<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'author',
        'title',
        'user_id',
        'post_content',
        'post_image',
        'post_date',
    ];

    public function user(){
        return $this->belongsTo('app\User');
    }
}
