<?php

namespace App\Models;

use App\Concerns\Flagable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use Flagable;

    protected $table = 'courses';
    protected $primaryKey = 'courses_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
