<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studenta extends Model
{
    use HasFactory;
protected $table = 'studentas'; 

    protected $fillable = [
        'name', 'age', 'gender', 'address', 'phone', 'course_id', 'email', 'image_url'
    ];
}