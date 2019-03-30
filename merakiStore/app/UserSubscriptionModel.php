<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSubscriptionModel extends Model
{
  protected $table = "user_subscription";
  protected $primaryKey = "user_sub_id";
}
