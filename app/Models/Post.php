<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function index(Post $post)
    {
    return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    
    } 

}
