<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['camera_id', 'user_id','url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function camera()
    {
        return $this->belongsTo(Camera::class);
    }
    
    public function data()
    {
        return $this->hasOne(Picdata::class);
    }
}
