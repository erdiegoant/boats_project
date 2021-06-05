<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Rating extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = [];

    public function boat(): BelongsTo
    {
        return $this->belongsTo(Boat::class);
    }

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function author(): HasOneThrough
    {
        return $this->hasOneThrough(User::class, Booking::class);
    }
}
