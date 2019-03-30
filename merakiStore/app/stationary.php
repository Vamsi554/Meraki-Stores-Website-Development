<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stationary extends Model
{
  protected $table = "stationary_products";
  protected $primaryKey = "stationary_product_id";
  public $incrementing = false;
}
