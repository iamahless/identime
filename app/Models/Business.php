<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Business extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'logo',
        'name',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($business) {
            $business->businessKey()->create([
                'public_key' => "ime_pub_".Str::random(40),
                'private_key' => "ime_pri_".Str::random(40)
            ]);
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function businessKey(): HasOne
    {
        return $this->hasOne(BusinessKey::class);
    }

    public function permissions(): HasMany
    {
        return $this->hasMany(PermissionAccess::class);
    }
}
