<?php

namespace App\Http\Controllers;

use App\QuickLink;
use Illuminate\Http\Request;

class QuickLinkController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }


    public function all(){
      $links = QuickLink::all();
      return view('admin.quick-links', compact('links'));
    }

    public function add(Request $request){
      $link = QuickLink::create([
        'title' => $request->title,
        'url' => $request->url,
      ]);

      return back();
    }

    public function remove(Request $request){
      $link = QuickLink::find($request->id);
      $link->delete();
      return back();
    }
}
