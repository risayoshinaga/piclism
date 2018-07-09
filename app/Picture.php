<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['content','camera_id', 'user_id'];

    public function taker()
    {
        return $this->belongsTo(User::class);
    }
    
    public function camera()
    {
        return $this->belongsTo(Camera::class);
    }
}
