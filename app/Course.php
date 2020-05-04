<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function location () {
        // de naam van de methode is important, want deze heeft invloed op het verwijs veld...
        return $this->belongsTo(Location::class); // select * from course where location_id = $id
    }

    public function student () {
        return $this->belongsToMany(Student::class)->withTimestamps();
    }
    public function getNameAttribute($value)
        {
        return ucfirst($value);
        }
}
