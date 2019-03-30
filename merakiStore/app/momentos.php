<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class momentos extends Model
{
  protected $table = "momentos_products";
  protected $primaryKey = "momento_id";
  public $incrementing = false;
}
