<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class Accommodation extends Model
{
    use HasFactory;
    public function booking(): BelongsTo{
        return $this->belongsTo(Booking::class);
    }

    public function services(): BelongsToMany{
        return $this->belongsToMany(Service::class);
    }
}
