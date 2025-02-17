<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'trip_id', 'month', 'year', 'start_date', 'end_date', 'price',
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
