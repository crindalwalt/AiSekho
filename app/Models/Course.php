<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

public function teacher(){
    return $this->belongsTo(Teacher::class);}



    protected $guarded = [];

    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;
}
