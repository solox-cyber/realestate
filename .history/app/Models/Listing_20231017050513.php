<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location_id', 'agent_id', 'image', 'address', 'cost', 'status'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function images()
    {
        return $this->hasMany(ListingImage::class);
    }

    public function features()
    {
        return $this->hasOne(Feature::class, 'listingIm');
    }
}
