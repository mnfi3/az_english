<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'description'];

  public function image(){
    return $this->morphOne('App\Image', 'imageable');
  }

  public function departments(){
    return $this->hasMany('App\Department');
  }
}
