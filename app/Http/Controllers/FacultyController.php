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
        'dean' => $request->dean,
        'dean_email' => $request->dean_email,
        'dean_phone' => $request->dean_phone,
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


  public function editPage($id){
    $faculty = Faculty::find($id);
    return view('admin.faculty-edit', compact('faculty'));
  }


  public function edit(Request $request){
    $faculty = Faculty::find($request->id);
    $faculty->name = $request->name;
    $faculty->dean = $request->dean;
    $faculty->dean_email = $request->dean_email;
    $faculty->dean_phone = $request->dean_phone;
    $faculty->description = $request->description;
    $faculty->save();

    if($request->hasFile('images')){
      $files = $request->file('images');
      foreach ($files as $file) {
        Uploader::saveImage('App\Faculty', $faculty->id, $file);
      }
    }

    return redirect(url('admin-academic'));
  }
}
