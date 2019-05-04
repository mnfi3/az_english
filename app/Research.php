<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Research extends Model
{
    use SoftDeletes;

    protected $fillable = ['type', 'description'];

  public function image(){
    return $this->morphOne('App\Image', 'imageable');
  }

}
