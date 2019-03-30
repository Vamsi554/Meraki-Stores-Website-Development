<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bags extends Model
{
  protected $table = "bags_products";
  protected $primaryKey = "bag_id";
  public $incrementing = false;
}
