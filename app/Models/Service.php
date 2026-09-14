<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class Service extends Model
{
    use HasFactory;

    public function accommodations(): belongsToMany{
        return $this->belongsToMany(Accommodation::class);
    }
}
