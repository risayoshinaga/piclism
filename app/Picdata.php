<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picdata extends Model
{
    protected $fillable = ['picture_id', 'speed', 'f_value', 'iso', 'lens'];
    
    public function pictures()
    {
        return $this->belongsTo(Picture::class);
    }
}
