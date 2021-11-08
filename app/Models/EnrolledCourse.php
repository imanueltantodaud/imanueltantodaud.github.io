<?php

namespace App\Models;

use App\Concerns\Flagable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrolledCourse extends Model
{
    use Flagable;

    protected $table = 'enrolled_courses';
    protected $primaryKey = 'enrolled_courses_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
