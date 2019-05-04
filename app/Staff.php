<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use SoftDeletes;

    protected $fillable = ['type', 'full_name', 'email', 'fax', 'phone'];

  public function image(){
    return $this->morphOne('App\Image', 'imageable');
  }


}
