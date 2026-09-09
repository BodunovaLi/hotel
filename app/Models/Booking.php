<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Booking extends Model
{
    use HasFactory;
    public function room(): BelongsTo{
        return $this->belongsTo(Room::class);
    }
    public function guest(): BelongsTo{
        return $this->belongsTo(Guest::class);
    }

    public function accommodation(): HasOne{
        return $this->hasOne(Accommodation::class);
    }
}
