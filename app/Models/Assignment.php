<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = ['teacher_id', 'semester_id', 'class_id', 'section_id', 'course_id', 'session_id', 'assignment_name', 'assignment_file_path'];
}
