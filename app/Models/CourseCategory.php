<?php

namespace App\Models;

use App\Concerns\Flagable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use Flagable;

    protected $table = 'course_categories';
    protected $primaryKey = 'course_categories_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
