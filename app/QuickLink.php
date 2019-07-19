<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuickLink extends Model
{
  use SoftDeletes;

  protected $fillable = ['title', 'url'];
}
