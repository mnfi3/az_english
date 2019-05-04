<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampusLife extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'content'];


  public function image(){
    return $this->morphOne('App\Image', 'imageable');
  }


}
