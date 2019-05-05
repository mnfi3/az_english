<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function add(Request $request){
    $post = Post::create([
      'title' => $request->title,
      'content' => $request->get('content'),
    ]);

    if($request->hasFile('image')){
     Uploader::saveImage('App\Post', $post->id, $request->file('image'));
    }

    if($request->hasFile('documents')){
      $files = $request->file('documents');
      foreach ($files as $file) {
        Uploader::saveDoc('App\Post', $post->id, $file);
      }
    }

    return back();
  }

  public function remove(Request $request){
    $post = Post::find($request->id);
    $post->delete();
    return back();
  }


}
