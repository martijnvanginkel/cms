<?php

namespace charmfarmer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
  use Softdeletes;

  protected $dates = ['deleted_at'];

}
