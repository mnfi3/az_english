<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

    public function add(Request $request){
      $faculty = Faculty::create([
        'name' => $request->name,
        'description' => $request->description,
      ]);

      if($request->hasFile('images')){
        $files = $request->file('images');
        foreach ($files as $file) {
          Uploader::saveImage('App\Faculty', $faculty->id, $file);
        }
      }

      return back();
    }

  public function remove(Request $request){
      $faculty = Faculty::find($request->id);
      $faculty->delete();
      return back();
  }
}
