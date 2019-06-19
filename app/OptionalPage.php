<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OptionalPage extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content'];


    public function images(){
      return $this->morphMany('App\Image', 'imageable');
    }

    public function docs(){
      return $this->morphMany('App\Document', 'documentable');
    }
}
