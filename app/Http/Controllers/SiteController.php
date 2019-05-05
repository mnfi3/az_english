<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Link;
use App\Post;
use App\Slider;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
      $posts = Post::orderBy('id', 'desc')->take(4)->get();
      $sliders = Slider::orderBy('id', 'desc')->get();
      return view('index', compact(['posts', 'sliders', 'images', 'links', 'contact']));
    }

    public function posts(){
      $posts = Post::orderBy('id', 'desc')->paginate(20);
      return view('news.news',compact('posts'));
    }

    public function post($id){
      $post = Post::find($id);
      return view('news.news-detail', compact('post'));
    }
}
