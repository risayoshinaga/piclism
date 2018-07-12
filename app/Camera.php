<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Camera extends Model
{
    protected $fillable = ['explanation', 'user_id', 'name','price'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function datas()
    {
        return $this->hasOne(Camedata::class, 'camera_id');
    }    
}