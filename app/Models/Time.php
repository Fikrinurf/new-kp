<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Time extends Model
{
    use HasFactory;

    protected $fillable = [
        'time_slot'
    ];
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
