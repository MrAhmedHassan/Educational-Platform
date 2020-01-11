<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function teacher()
    {
        return $this->belongsTo('App\User');
    }

    public function suppoter()
    {
        return $this->hasMany('App\User');
    }

}
