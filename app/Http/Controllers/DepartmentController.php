<?php

namespace App\Http\Controllers;

use App\Department;
use App\Master;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function departmentAdd(Request $request){
      $dep = Department::create([
        'faculty_id' => $request->faculty_id,
        'name' => $request->name,
      ]);

      return back();
    }

    public function departmentRemove(Request $request){
      $dep = Department::find($request->id);
      $dep->delete();
      return back();
    }

    public function masterAdd(Request $request){
      $master = Master::create([
        'department_id' => $request->department_id,
        'name' => $request->name,
        'speciality' => $request->speciality,
        'rank' => $request->rank,
        'email' => $request->email,
        'cv_link' => $request->cv_link,
      ]);

      if($request->hasFile('images')){
        $files = $request->file('images');
        foreach ($files as $file) {
          Uploader::saveImage('App\Master', $master->id, $file);
        }
      }

      if($request->hasFile('documents')){
        $files = $request->file('documents');
        foreach ($files as $file) {
          Uploader::saveDoc('App\Master', $master->id, $file);
        }
      }

      return back();
    }

    public function masterRemove(Request $request){
      $master = Master::find($request->id);
      $master->delete();
      return back();
    }
}
