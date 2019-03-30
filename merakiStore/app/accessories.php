<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accessories extends Model
{
  protected $table = "accessory_products";
  protected $primaryKey = "accessory_id";
  public $incrementing = false;
}
