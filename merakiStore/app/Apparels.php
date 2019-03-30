<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apparels extends Model
{
  protected $table = "apparels_products";
  protected $primaryKey = "apparel_id";
  public $incrementing = false;
}
