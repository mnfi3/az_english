<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Master extends Model
{
    use SoftDeletes;

    protected $fillable = ['department_id', 'name', 'speciality', 'rank', 'email', 'cv_link'];


  public function image(){
    return $this->morphOne('App\Image', 'imageable');
  }

  public function doc(){
    return $this->morphOne('App\Document', 'documentable');
  }
}
