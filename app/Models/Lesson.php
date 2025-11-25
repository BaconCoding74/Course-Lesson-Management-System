<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_mode',
        'date',
        'start_time',
        'end_time',
        'lecturer_content',
        'teaching_objectives',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_lessons')
            ->withTimestamps()
            ->using(StudentLesson::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'subject_lessons')
            ->withTimestamps();
    }

    public function attendances()
    {
        return $this->hasManyThrough(Attendance::class, StudentLesson::class);
    }

    public function performances()
    {
        return $this->hasManyThrough(StudentPerformance::class, StudentLesson::class);
    }

    public function attachments()
    {
        return $this->hasManyThrough(Attachment::class, StudentLesson::class);
    }
}
