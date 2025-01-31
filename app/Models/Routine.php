<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;

    protected $fillable = ['start', 'end', 'weekday', 'class_id', 'section_id', 'course_id', 'session_id'];
}
