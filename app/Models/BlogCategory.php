<?php

namespace App\Models;

use App\Concerns\Flagable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use Flagable;

    protected $table = 'blog_categories';
    protected $primaryKey = 'blog_categories_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
