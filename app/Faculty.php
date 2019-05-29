<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'dean', 'dean_email', 'dean_phone', 'description'];

  public function images(){
    return $this->morphMany('App\Image', 'imageable');
  }

  public function departments(){
    return $this->hasMany('App\Department');
  }
}
