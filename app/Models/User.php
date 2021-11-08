<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Concerns\Flagable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Flagable, SoftDeletes;

    protected $primaryKey = 'user_id';
    public $incrementing = false;
    protected $keyType = 'string';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $appends = [
        'active', 'email_verified', 'terminate'
    ];

    public const FLAG_ACTIVE = 1;
    public const FLAG_EMAIL_VERIFIED = 2;
    public const FLAG_TERMINATE = 4;

    public function getActiveAttribute() {
        return ($this->flags & self::FLAG_ACTIVE) == self::FLAG_ACTIVE;

    }
    
    public function getEmailVerifiedAttribute() {
        return ($this->flags & self::FLAG_EMAIL_VERIFIED) == self::FLAG_EMAIL_VERIFIED;

    }

    public function getTerminateAttribute() {
        return ($this->flags & self::FLAG_TERMINATE) == self::FLAG_TERMINATE;

    }

     protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'flags',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
