<?php

namespace App\Models;

use App\Concerns\Flagable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use Flagable;

    protected $table = 'blogs';
    protected $primaryKey = 'blogs_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
