<?php

namespace App\Http\Controllers;

use App\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function add(Request $request){
      $research = Research::create([
        'type' => $request->type,
        'description' => $request->description,
      ]);

      if($request->hasFile('images')){
        $files = $request->file('images');
        foreach ($files as $file) {
          Uploader::saveImage('App\Research', $research->id, $file);
        }
      }

      return back();
    }

    public function remove(Request $request){
      $research = Research::find($request->id);
      $research->delete();
      return back();
    }
}
