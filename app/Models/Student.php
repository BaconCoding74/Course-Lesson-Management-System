<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'note'];

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'student_lessons')
            ->withTimestamps()
            ->using(StudentLesson::class);
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
        return $this->hasManyThrough(Attachmenent::class, StudentLesson::class);
    }
}
