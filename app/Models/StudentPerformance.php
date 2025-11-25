<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPerformance extends Model
{
    use HasFactory;

    protected $fillable = ['student_lesson_id', 'performance_notes', 'quiz_score'];

    public function studentLesson()
    {
        return $this->belongsTo(StudentLesson::class);
    }
}
