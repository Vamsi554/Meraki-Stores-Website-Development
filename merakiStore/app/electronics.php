<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class electronics extends Model
{
  protected $table = "electronics_products";
  protected $primaryKey = "electronics_product_id";
  public $incrementing = false;
}
