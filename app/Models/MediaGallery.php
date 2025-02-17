<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MediaGallery extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'media_gallery';
    protected $fillable = [
        'trip_id',
        'image_path',
    ];

    protected $dates = ['deleted_at'];

    // Define the relationship with the Trip model
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
    
}

