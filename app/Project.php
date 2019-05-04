<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content'];


  public function image(){
    return $this->morphOne('App\Image', 'imageable');
  }

  public function docs(){
    return $this->morphMany('App\Document', 'documentable');
  }

}
