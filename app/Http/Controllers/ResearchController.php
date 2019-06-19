<?php

namespace App\Http\Controllers;

use App\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }


    public function add(Request $request){
      $researches = Research::where('type', '=', $request->type)->get();
      foreach ($researches as $research){
        $research->delete();
      }

      $research = Research::create([
        'type' => $request->type,
        'title' => $request->title,
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



  public function editPage($id){
    $research = Research::find($id);
    return view('admin.research-edit-page', compact(['research']));
  }

  public function edit(Request $request){
    $research = Research::find($request->id);
//    $research->type = $request->type;
    $research->title = $request->title;
    $research->description = $request->description;
    $research->save();


    if($request->hasFile('images')){
      $files = $request->file('images');
      foreach ($files as $file) {
        Uploader::saveImage('App\Research', $research->id, $file);
      }
    }

    return redirect(url('admin-research'));
  }

    public function remove(Request $request){
      $research = Research::find($request->id);
      $research->delete();
      return back();
    }
}
