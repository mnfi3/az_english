<?php

namespace App\Http\Controllers;

use App\Conference;
use App\Mou;
use App\Partnership;
use App\Project;
use App\Staff;
use Illuminate\Http\Request;

class OfficeController extends Controller
{


    public function staffAdd(Request $request){
      $staff = Staff::create([
        'type' => $request->type,
        'full_name' => $request->full_name,
        'email' => $request->email,
        'fax' => $request->fax,
        'phone' => $request->phone,
      ]);


      if($request->hasFile('images')){
        $files = $request->file('images');
        foreach ($files as $file) {
          Uploader::saveImage('App\Staff', $staff->id, $file);
        }
      }

      if($request->hasFile('documents')){
        $files = $request->file('documents');
        foreach ($files as $file) {
          Uploader::saveDoc('App\Post', $staff->id, $file);
        }
      }

      return back();
    }

    public function staffRemove(Request $request){
      $staff = Staff::find($request->id);
      $staff->delete();
      return back();
    }




  public function mouAdd(Request $request){
      $mou = Mou::create([
        'full_name' => $request->full_name
      ]);
      return back();
  }

  public function mouRemove(Request $request){
      $mou = Mou::find($request->id);
      $mou->delete();
      return back();
  }





  public function projectAdd(Request $request){
      $project = Project::create([
        'title' => $request->title,
        'content' => $request->get('content'),
      ]);

    if($request->hasFile('images')){
      $files = $request->file('images');
      foreach ($files as $file) {
        Uploader::saveImage('App\Project', $project->id, $file);
      }
    }

    if($request->hasFile('documents')){
      $files = $request->file('documents');
      foreach ($files as $file) {
        Uploader::saveDoc('App\Project', $project->id, $file);
      }
    }

    return back();
  }

  public function projectRemove(Request $request){
      $project = Project::find($request->id);
      $project->delete();
      return back();
  }






  public function conferenceAdd(Request $request){
      $conference = Conference::create([
        'title' => $request->title,
        'content' => $request->get('content'),
      ]);

    if($request->hasFile('images')){
      $files = $request->file('images');
      foreach ($files as $file) {
        Uploader::saveImage('App\Conference', $conference->id, $file);
      }
    }

    if($request->hasFile('documents')){
      $files = $request->file('documents');
      foreach ($files as $file) {
        Uploader::saveDoc('App\Conference', $conference->id, $file);
      }
    }

    return back();
  }

  public function conferenceRemove(Request $request){
    $conference = Conference::find($request->id);
    $conference->delete();
    return back();
  }




  public function partnershipAdd(Request $request){
      $partnership = Partnership::create([
        'title' => $request->title,
        'content' => $request->get('content'),
      ]);

    if($request->hasFile('images')){
      $files = $request->file('images');
      foreach ($files as $file) {
        Uploader::saveImage('App\Partnership', $partnership->id, $file);
      }
    }

    if($request->hasFile('documents')){
      $files = $request->file('documents');
      foreach ($files as $file) {
        Uploader::saveDoc('App\Partnership', $partnership->id, $file);
      }
    }

    return back();
  }

  public function partnershipRemove(Request $request){
    $partnership = Partnership::find($request->id);
    $partnership->delete();
    return back();
  }
}
