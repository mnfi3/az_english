<?php

namespace App\Http\Controllers;

use App\Department;
use App\Master;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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

    public function masterEditPage($id){
      $master = Master::find($id);
      $departments = Department::all();
      return view('admin.masterEdit', compact('master', 'departments'));
    }

    public function masterEdit(Request $request){
      $master = Master::find($request->id);
      $master->department_id = $request->department_id;
      $master->name = $request->name;
      $master->speciality = $request->speciality;
      $master->rank = $request->rank;
      $master->email = $request->email;
      $master->cv_link = $request->cv_link;
      $master->save();

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

      return redirect(url('admin-dep'));
    }




//  public function import(){
//    $data = Excel::load('masters.xlsx', 'UTF-8')->get();
//    if($data->count()){
//      $data = json_encode($data, JSON_UNESCAPED_UNICODE);
//      $data = json_decode($data);
//      foreach ($data as $items) {
//        foreach ($items as $item){
//          $name = $item->fullname_en;
//          $email = $item->email;
//          $cv_link = $item->link;
//          $dep = $item->affiliation;
//          $dep = ltrim($dep, 'Department of ');
//          $dep = str_replace(',Tabriz,Iran', '', $dep);
//          $dep = str_replace(',Tabriz', '', $dep);
//          $dep = str_replace(', Tabriz,Iran', '', $dep);
//          $dep = str_replace(', Tabriz, Iran', '', $dep);
//          $dep = str_replace(',Tabriz, Iran', '', $dep);
//          $dep = str_replace(',Tabriz,Iran ', '', $dep);
//          $dep = str_replace('_x000D_Tabriz', '', $dep);
//          $dep = str_replace('_x000D_Iran', '', $dep);
//          $dep = str_replace(',', '', $dep);
//          echo $dep . '<br>';
//
//          $department = Department::where('name', 'like', $dep)->first();
//          if($department == null){
//            $department = Department::create([
//              'faculty_id' => null,
//              'name' => $dep,
//            ]);
//          }
//
//
//            $master = Master::create([
//              'department_id' => $department->id,
//              'name' => $name,
//              'email' => $email,
//              'cv_link' => $cv_link,
//            ]);
//        }
//
//      }
//    }
//  }






}
