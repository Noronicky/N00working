<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller

public function show(Post $post)
{
    return view('posts/show')->with(['post' => $post]);
}

?>