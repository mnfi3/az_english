<?php

namespace App\Http\Controllers;

use App\Course;
use App\LLCForm;
use Illuminate\Http\Request;

class LlcController extends Controller
{
    public function llcAdd(Request $request){
      $llc = LLCForm::create([
        'name' => $request->name
      ]);

      if($request->hasFile('images')){
        $files = $request->file('images');
        foreach ($files as $file) {
          Uploader::saveImage('App\LLCForm', $llc->id, $file);
        }
      }

      if($request->hasFile('documents')){
        $files = $request->file('documents');
        foreach ($files as $file) {
          Uploader::saveDoc('App\LLCForm', $llc->id, $file);
        }
      }

      return back();
    }

    public function llcRemove(Request $request){
      $llc = LLCForm::find($request->id);
      $llc->delete();
      return back();
    }



    public function courseAdd(Request $request){
      $course = Course::create([
        'title' => $request->title,
        'content' => $request->get('content'),
      ]);

      if($request->hasFile('images')){
        $files = $request->file('images');
        foreach ($files as $file) {
          Uploader::saveImage('App\Course', $course->id, $file);
        }
      }

      if($request->hasFile('documents')){
        $files = $request->file('documents');
        foreach ($files as $file) {
          Uploader::saveDoc('App\Course', $course->id, $file);
        }
      }

      return back();

    }

    public function courseRemove(Request $request){
      $course = Course::find($request->id);
      $course->delete();
      return back();
    }
}
