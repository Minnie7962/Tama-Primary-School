<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentParentInfo extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'father_name', 'father_phone', 'mother_name', 'mother_phone', 'parent_address'];
}
