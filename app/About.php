<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use SoftDeletes;

    protected $fillable = ['type', 'content'];

  public function images(){
    return $this->morphMany('App\Image', 'imageable');
  }
}
