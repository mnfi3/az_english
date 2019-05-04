<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    protected $fillable = ['full_name', 'text', 'email'];



  public function doc(){
    return $this->morphOne('App\Document', 'documentable');
  }
}
