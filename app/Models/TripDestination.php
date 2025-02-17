<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripDestination extends Model
{
    use HasFactory;

    // Specify the table if it doesn't follow the Laravel naming convention
    protected $table = 'trip_destinations';

    // Define the fillable fields
    protected $fillable = [
        'trip_id',
        'name',
        'latitude',
        'longitude',
    ];

    // Define the relationship with the Trip model
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
