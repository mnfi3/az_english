<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Research extends Model
{
    use SoftDeletes;

    protected $fillable = ['type', 'title', 'description'];

  public function images(){
    return $this->morphMany('App\Image', 'imageable');
  }

}
