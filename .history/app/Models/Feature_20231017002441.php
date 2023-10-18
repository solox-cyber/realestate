<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $fillable = ['baths', 'bedrooms', 'rooms', 'livingrooms', 'area', 'year_built', 'garages', 'bathrooms', 'plot_size'];
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}
