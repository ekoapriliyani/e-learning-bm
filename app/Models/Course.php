<?php

// app/Models/Course.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'description', 'thumbnail'];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}
