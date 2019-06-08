<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function remove(Request $request){
    $id = $request->id;
    $image = Image::find($id);
    $image->delete();

    return back();
  }
}
