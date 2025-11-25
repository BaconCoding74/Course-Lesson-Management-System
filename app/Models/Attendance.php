<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['student_lesson_id', 'status', 'late_by'];

    public function studentLesson()
    {
        return $this->belongsTo(StudentLesson::class);
    }
}
