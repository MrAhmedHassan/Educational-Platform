<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    public function courseTeacher(){
//        return $this->belongsTo(Course::);
//    }

    public function C_Teacher()
    {
        return $this->hasMany('App\Course');
    }

    public function C_Supporter()
    {
        return $this->belongsTo('App\Course');
    }

    public function teacher()
    {
        return $this->hasMany('App\User');
    }

    public function supporter()
    {
        return $this->belongsTo('App\User');
    }

}

