<?php

namespace App\Http\Controllers;

use App\CampusLife;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function add(Request $request){
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
}
