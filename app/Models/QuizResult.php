<?php

namespace App\Models;

use App\Concerns\Flagable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    use Flagable;

    protected $table = 'quiz_results';
    protected $primaryKey = 'quiz_results_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
