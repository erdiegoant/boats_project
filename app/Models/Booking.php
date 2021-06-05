<?php

namespace App\Models;

use App\Enums\BookingStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $guarded = [];

    protected $casts= [
        'status' => BookingStatusEnum::class,
    ];

    public function boat(): BelongsTo
    {
        return $this->belongsTo(Boat::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
