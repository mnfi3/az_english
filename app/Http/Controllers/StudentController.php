<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function add(Request $request){
      $student = Student::create([
        'type' => $request->type,
        'title' => $request->title,
        'description' => $request->description,
      ]);


      if($request->hasFile('documents')){
        $files = $request->file('documents');
        foreach ($files as $file) {
          Uploader::saveDoc('App\Student', $student->id, $file);
        }
      }


      if($request->hasFile('images')){
        $files = $request->file('images');
        foreach ($files as $file) {
          Uploader::saveImage('App\Student', $student->id, $file);
        }
      }

      return back();
    }

    public function remove(Request $request){
      $student = Student::find($request->id);
      $student->delete();
      return back();
    }
}