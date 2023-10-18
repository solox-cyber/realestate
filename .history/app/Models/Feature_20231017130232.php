<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $fillable = ['baths', 'bedrooms', 'rooms', 'livingrooms', 'area', 'year_built', 'garages', 'bathrooms', 'plot_size''video',
    'image',
    'ground_rooms',
    'ground_bath',
    'ground_size',
    'main_rooms',
    'main_bath',
    'main_size'];
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }

    public function listingImage()
    {
        return $this->belongsTo(ListingImage::class, 'listing_id');
    }
}
