<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function course () {
        return $this->hasMany(Course::class);
    }
}
