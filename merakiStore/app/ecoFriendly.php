<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ecoFriendly extends Model
{
  protected $table = "ecofriendly_products";
  protected $primaryKey = "ecofriendly_product_id";
  public $incrementing = false;
}
