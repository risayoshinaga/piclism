<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable=['year','month','day','camera_id','user_id'];
}
