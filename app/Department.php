<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;

    protected $fillable = ['faculty_id', 'name', 'head'];

    public function masters(){
      return $this->hasMany('App\Master');
    }
}
