<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class print extends Model
{
  protected $table = "print_products";
  protected $primaryKey = "print_product_id";
  public $incrementing = false;
}
