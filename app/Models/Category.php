<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'isActive', 'bg_image'];

   

    public function trips()
    {
        return $this->hasMany(Trip::class, 'trip_category', 'id');
    }

}
