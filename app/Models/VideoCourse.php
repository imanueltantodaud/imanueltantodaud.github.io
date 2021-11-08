<?php

namespace App\Models;

use App\Concerns\Flagable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoCourse extends Model
{
    use Flagable;

    protected $table = 'video_courses';
    protected $primaryKey = 'video_courses_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
