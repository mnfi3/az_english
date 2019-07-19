<?php

namespace App\Http\Controllers;

use App\OptionalPage;
use Illuminate\Http\Request;

class OptionalPageController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }


  public function show(){
    $pages = OptionalPage::orderBy('id', 'desc')->get();
    return view('admin.preview-edit', compact(['pages']));
  }

  public function add(Request $request){
    $page = OptionalPage::create([
      'title' => $request->title,
      'content' => $request->get('content'),
    ]);

    if($request->hasFile('images')){
      $files = $request->file('images');
      foreach ($files as $file) {
        Uploader::saveImage('App\OptionalPage', $page->id, $file);
      }
    }

    if($request->hasFile('documents')){
      $files = $request->file('documents');
      foreach ($files as $file) {
        Uploader::saveDoc('App\OptionalPage', $page->id, $file);
      }
    }

    return back();
  }

  public function edit(Request $request){
    $page = OptionalPage::find($request->id);
//    $research->type = $request->type;
    $page->title = $request->title;
    $page->content = $request->get('content');
    $page->save();


    if($request->hasFile('images')){
      $files = $request->file('images');
      foreach ($files as $file) {
        Uploader::saveImage('App\OptionalPage', $page->id, $file);
      }
    }

    return redirect(url('admin-optional-pages'));
  }

  public function remove($id){
   $page = OptionalPage::find($id);
   $page->delete();
   return back();
  }

  public function editPage($id){
    $page = OptionalPage::find($id);
    return view('admin.previewEdit', compact(['page']));
  }

}
