<?php

namespace App\Http\Controllers;

use  App\Models\Post;

class PostController extends Controller

 {
     public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
  {
     return $post->get();//$postの中身を戻り値にする
   }

}