<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Trip extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $fillable = [
        'trip_title',
        'title_slug',
        'trip_destinations',
        'trip_overview',
        'trip_location',
        'trip_category',
        'trip_image',
        'trip_duration',
        'trip_description',
        'trip_includes',
        'trip_excludes',
        'trip_itinerary',
        'trip_price',
    ];

    // Define the relationship with the Location model
    public function location()
    {
        return $this->belongsTo(Location::class, 'trip_location');
    }
    public function sluggable(): array
    {
        return [
            'title_slug' => [
                'source' => 'trip_title',
            ],
        ];
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'trip_category');
    }

    public function destinations()
    {
        return $this->hasMany(TripDestination::class);
    }

    public function itineraries()
    {
        return $this->hasMany(TripItinerary::class);
    }

    public function mediaGalleries()
    {
        return $this->hasMany(MediaGallery::class);
    }

    public function schedules()
    {
        return $this->hasMany(TripSchedule::class);
    }

//    public static function boot()
//    {
//        parent::boot();
//
//        // Cascade delete related records
//        static::deleting(function ($trip) {
//            // Delete related destinations
//            if ($trip->destinations) {
//                $trip->destinations->delete();
//            }
//            // Delete related itineraries
//            if ($trip->itineraries) {
//                $trip->itineraries->delete();
//            }
//            // Delete related schedules
//            if ($trip->schedules) {
//                $trip->schedules->delete();
//            }
//            // Delete related mediaGalleries
//            if ($trip->mediaGalleries) {
//                $trip->mediaGalleries->delete();
//            }
//        });
//    }
}
