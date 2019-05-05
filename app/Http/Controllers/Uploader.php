<?php

namespace App\Http\Controllers;


use App\Document;
use App\Image;

class Uploader {

  public static function saveImage($class_name, $id, $file){
    date_default_timezone_set('Asia/Tehran');
    $year_dir = date('Y', time());
    $month_dir = date('m', time());
    $day_dir = date('d', time());
    $hour_dir = date('H', time());
    $file_dir = 'uploads/images/' . $year_dir . '/' . $month_dir . '/' . $day_dir;
    $name = $file->getClientOriginalName();
    $file->move($file_dir, $name);
    $path = $file_dir .'/'. $name;
    $image = Image::create([
      'imageable_id' => $id,
      'imageable_type' => $class_name,
      'path' => $path,
    ]);

    return $image;
  }

  public static function saveDoc($class_name, $id, $file){
    date_default_timezone_set('Asia/Tehran');
    $year_dir = date('Y', time());
    $month_dir = date('m', time());
    $day_dir = date('d', time());
    $hour_dir = date('H', time());
    $file_dir = 'uploads/documents/' . $year_dir . '/' . $month_dir . '/' . $day_dir;
    $name = $file->getClientOriginalName();
    $file->move($file_dir, $name);
    $path = $file_dir .'/'. $name;
    $doc = Document::create([
      'documentable_id' => $id,
      'documentable_type' => $class_name,
      'path' => $path,
    ]);

    return $doc;
  }

}