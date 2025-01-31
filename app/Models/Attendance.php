<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'class_id', 'section_id', 'student_id', 'status', 'session_id'];

    public function student()
    {
        return $this->belongsTo(StudentInfo::class);
    }
}
