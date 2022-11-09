<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wallet extends Model
{
    use HasFactory, HasUuids;

    public const TYPE_NIN = 'nin';
    public const TYPE_BVN = 'bvn';
    public const TYPE_PASSPORT = 'passport';
    public const TYPE_LICENSE = 'license';
    public const TYPE_HEALTH = 'health';
    public const TYPE_VC = 'vote_card';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'type',
        'payload',
        'is_verified_at'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_verified' => 'datetime',
        'payload' => 'json'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'payload'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
