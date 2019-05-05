<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function add(Request $request){
      $slider = Slider::create([
        'title' => $request->title,
        'link' => $request->link,
      ]);
      if($request->hasFile('images')){
        $files = $request->file('images');
        foreach ($files as $file) {
          Uploader::saveImage('App\Slider', $slider->id, $file);
        }
      }

      if($request->hasFile('documents')){
        $files = $request->file('documents');
        foreach ($files as $file) {
          Uploader::saveDoc('App\Slider', $slider->id, $file);
        }
      }

      return back();
    }

    public function remove(Request $request){
      $slider = Slider::find($request->id);
      $slider->delete();
      return back();
    }



    public function imageAdd(Request $request){
      if($request->hasFile('images')){
        $files = $request->file('images');
        foreach ($files as $file) {
          Uploader::saveImage(null, null, $file);
        }
      }

      return back();
    }
}
