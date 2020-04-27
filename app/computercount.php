<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class computercount extends Model
{
  protected $table = 'tb_addcomputer';
  public $primaryKey = 'id';
  public $timestamps = false;
}
