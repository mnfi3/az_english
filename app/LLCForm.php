<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LLCForm extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];



  public function doc(){
    return $this->morphOne('App\Document', 'documentable');
  }
}
