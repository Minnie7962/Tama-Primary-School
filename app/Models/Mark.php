<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = ['marks', 'student_id', 'class_id', 'section_id', 'course_id', 'exam_id', 'session_id'];
}
