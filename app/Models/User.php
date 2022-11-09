<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property mixed $type
 * @method create(array $array)
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    public const TYPE_DEFAULT = 'default';
    public const TYPE_BUSINESS = 'business';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'type',
        'avatar',
        'ssn',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isDefaultType(): bool
    {
        return $this->type === self::TYPE_DEFAULT;
    }

    public function isBusinessType(): bool
    {
        return $this->type === self::TYPE_BUSINESS;
    }

    public function business(): HasOne
    {
        return $this->hasOne(Business::class);
    }

    public function permissions(): HasMany
    {
        return $this->hasMany(PermissionAccess::class);
    }

    public function wallets(): HasMany
    {
        return $this->hasMany(Wallet::class);
    }
}
