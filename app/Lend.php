<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lend extends Model
{
    protected $fillable = ['camera_id','start','end'];
}