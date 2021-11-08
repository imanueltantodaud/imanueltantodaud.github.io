<?php

namespace App\Models;

use App\Concerns\Flagable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSetup extends Model
{
    use Flagable;

    protected $table = 'course_setups';
    protected $primaryKey = 'course_setups_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
