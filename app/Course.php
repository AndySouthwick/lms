<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   protected $table = 'courses';

    public function videos()
    {
        return $this->hasMany('App\Video');
    }

    public function tracks()
    {
        return $this->belongsToMany('App\Track');
    }
}
