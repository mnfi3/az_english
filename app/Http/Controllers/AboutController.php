<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

  public function historyAdd(Request $request){
      $about = About::create([
        'type' => 'HISTORY',
        'content' => $request->get('content'),
      ]);
      if($request->hasFile('images')){
        $files = $request->file('images');
        foreach ($files as $file) {
          Uploader::saveImage('App\About', $about->id, $file);
        }
      }

      return back();
    }

    public function historyRemove(){
      $abouts = About::where('type', '=', 'HISTORY')->get();
      foreach ($abouts as $about){
        $about->delete();
      }
      return back();
    }




    public function presidentMessageAdd(Request $request){
      $about = About::create([
        'type' => 'PRESIDENT_MESSAGE',
        'content' => $request->get('content'),
      ]);
      if($request->hasFile('image')){
        $file = $request->file('image');
        Uploader::saveImage('App\About', $about->id, $file);
      }

      return back();
    }

    public function presidentMessageRemove(){
      $abouts = About::where('type', '=', 'PRESIDENT_MESSAGE')->get();
      foreach ($abouts as $about){
        $about->delete();
      }
      return back();
    }
}
