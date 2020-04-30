<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // protected $fillable = ['name', 'email','phone','age'];
    protected $guarded = [];

    public function course () {
        return $this->belongsToMany(Course::class);
    }
}
