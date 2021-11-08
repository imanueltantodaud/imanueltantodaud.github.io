<?php

namespace App\Models;

use App\Concerns\Flagable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use Flagable;

    protected $table = 'quiz_questions';
    protected $primaryKey = 'quiz_questions_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $appends = [
        'active'
    ];

    public const FLAG_ACTIVE = 1;

    public function getActiveAttribute() {
        return ($this->flags & self::FLAG_ACTIVE) == self::FLAG_ACTIVE;

    }
}
