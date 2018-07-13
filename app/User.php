<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    

    public function cameras()
    {
        return $this->hasMany(Camera::class);
    }
    
    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
    
    public function cameradatas()
    {
        return $this->hasManyThrough('App\Camedata','App\Camera','user_id','camera_id','id','id');
    }
    
    public function picturedatas()
    {
        return $this->hasManyThrough('App\Picdata','App\Picture','user_id','picture_id','id','id');
    }
}
