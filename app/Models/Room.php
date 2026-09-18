<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Room extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function building(): BelongsTo{
        return $this->belongsTo(Building::class);
    }

    public function bookings(): HasMany{
        return $this->hasMany(Booking::class);
    }

    public function edit(){
        return view('room_edit', [
            'room' => Room::all()->where('id', $id)->first(),
            'buildings' => Building::all(),
        ]);
    }

    protected $fillable = [
        'number',
        'building_id',
        'sleeps',
        'price'
    ];
}
