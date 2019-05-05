<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable = ['type', 'title', 'description'];

  public function image(){
    return $this->morphOne('App\Image', 'imageable');
  }

  public function docs(){
    return $this->morphMany('App\Document', 'documentable');
  }
}
