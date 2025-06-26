<?php

namespace App\Models;

use App\Concerns\Flagable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorCourseRequest extends Model
{
    use Flagable;

    protected $table = 'instructor_course_requests';
    protected $primaryKey = 'instructor_course_requests_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
