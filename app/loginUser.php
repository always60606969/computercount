<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loginUser extends Model
{
  protected $table = 'users';
  public $primaryKey = 'id';
  public $timestamps = false;
}
