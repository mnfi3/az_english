<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'link'];

  public function image(){
    return $this->morphOne('App\Image', 'imageable');
  }


}
