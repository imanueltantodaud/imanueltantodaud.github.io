<?php

namespace App\Models;

use App\Concerns\Flagable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizOption extends Model
{
    use Flagable;

    protected $table = 'quiz_options';
    protected $primaryKey = 'quiz_options_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
