<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Camera extends Model
{
    protected $fillable = ['explanation', 'user_id', 'name'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
