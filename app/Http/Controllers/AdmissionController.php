<?php

namespace App\Http\Controllers;

use App\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }


  public function admission(){
    $admissions = Admission::all();
    return view('admin.admission', compact('admissions'));
  }

  public function remove(Request $request){
    $admission = Admission::find($request->id);
    $admission->delete();
    return back();
  }

  public function add(Request $request){
    $admissions = Admission::where('name', 'like', $request->name)->get();
    foreach ($admissions as $admission){
      $admission->delete();
    }

    $admission = Admission::create([
      'name' => $request->name,
      'description' => $request->description,
    ]);

    if($request->hasFile('images')){
      $files = $request->file('images');
      foreach ($files as $file) {
        Uploader::saveImage('App\Admission', $admission->id, $file);
      }
    }

    if($request->hasFile('documents')){
      $files = $request->file('documents');
      foreach ($files as $file) {
        Uploader::saveDoc('App\Admission', $admission->id, $file);
      }
    }

    return back();
  }


  public function editPage($id){
    $admission = Admission::find($id);
    return view('admin.admission-edit', compact('admission'));
  }


  public function edit(Request $request){
    $admission = Admission::find($request->id);
    $admission->name = $request->name;
    $admission->description = $request->description;
    $admission->save();

    if($request->hasFile('images')){
      $files = $request->file('images');
      foreach ($files as $file) {
        Uploader::saveImage('App\Admission', $admission->id, $file);
      }
    }

    if($request->hasFile('documents')){
      $files = $request->file('documents');
      foreach ($files as $file) {
        Uploader::saveDoc('App\Admission', $admission->id, $file);
      }
    }

    return redirect(url('admin-admission'));
  }
}
