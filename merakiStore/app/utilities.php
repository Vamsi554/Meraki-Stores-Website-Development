<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilities extends Model
{
  protected $table = "utility_products";
  protected $primaryKey = "utility_product_id";
  public $incrementing = false;
}
