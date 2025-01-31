<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = ['exam_name', 'start_date', 'end_date', 'class_id', 'course_id', 'semester_id', 'session_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}