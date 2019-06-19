<?php

namespace App\Http\Controllers;

use App\CampusLife;
use Illuminate\Http\Request;

class CampusController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }
  public function add(Request $request){
    //remove campuses with this name
    $campuses = CampusLife::where('name', '=', $request->name)->get();
    foreach ($campuses as $campus){
      $campus->delete();
    }

    $campus = CampusLife::create([
      'name' => $request->name,
      'content' => $request->get('content'),
    ]);

    if($request->hasFile('images')){
      $files = $request->file('images');
      foreach ($files as $file) {
        Uploader::saveImage('App\CampusLife', $campus->id, $file);
      }
    }

    return back();
  }

  public function remove(Request $request){
    $campus = CampusLife::find($request->id);
    $campus->delete();
    return back();
  }



  public function editPage($id){
    $campus = CampusLife::find($id);
    return view('admin.campus-edit', compact('campus'));
  }

  public function edit(Request $request){
    $campus = CampusLife::find($request->id);
//    $campus->name = $request->name;
    $campus->content = $request->get('content');
    $campus->save();

    if($request->hasFile('images')){
      $files = $request->file('images');
      foreach ($files as $file) {
        Uploader::saveImage('App\CampusLife', $campus->id, $file);
      }
    }

    return redirect(url('admin-campus'));
  }
}
