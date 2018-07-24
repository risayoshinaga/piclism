<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Camera extends Model
{
    protected $fillable = ['url', 'user_id', 'name','price'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function pictures(){
        return $this->hasMany(Picture::class);
    }    
    public function datas()
    {
        return $this->hasOne(Camedata::class, 'camera_id');
    }
    
    public function lends()
    {
        return $this->hasMany(Lend::class);
    }
}