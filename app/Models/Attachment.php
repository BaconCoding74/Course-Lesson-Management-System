<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = ['student_lesson_id', 'file_name', 'file_path', 'file_type'];

    public function studentLesson()
    {
        return $this->belongsTo(StudentLesson::class);
    }
}
