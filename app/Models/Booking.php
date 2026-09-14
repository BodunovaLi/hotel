<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Booking extends Model
{
    use HasFactory;
    public function room(): belongsTo{
        return $this->belongsTo(Room::class);
    }
    public function guest(): belongsTo{
        return $this->belongsTo(Guest::class);
    }

    public function accommodation(): hasOne{
        return $this->hasOne(Accommodation::class);
    }
}
