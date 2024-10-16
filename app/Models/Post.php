<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'category_id', 'content', 'title'
    ];

    public function category(){
        return $this->belongsTo(\App\Models\Category::class,'category_id');
    }

    public function user(){
        return $this->belongsTo(\App\Models\User::class,'user_id');
    }
}
