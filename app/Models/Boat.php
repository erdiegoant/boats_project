<?php

namespace App\Models;

use App\Enums\CaptainedEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Boat extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = [];

    protected $casts = [
        'captained' => CaptainedEnum::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function ratings(): HasManyThrough
    {
        return $this->hasManyThrough(Rating::class, Booking::class);
    }
}
