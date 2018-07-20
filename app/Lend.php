<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lend extends Model
{
    protected $fillable =['year','month','day','camera_id'];
    
    public function camera () 
    {
        return $this->belongsTo('App\Camera');
    }
}