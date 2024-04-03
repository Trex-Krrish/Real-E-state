<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_type',
        'bedrooms',
        'bathrooms',
        'square_footage',
        'year_built',
        'description',
        'location',
        'city',
        'state',
        'zip',
        'listing_price',
        'seller_name',
        'seller_email',
        'seller_phone',
    ];

    // Define any relationships here, if needed
    public function photos()
    {
        return $this->hasMany(HousePhoto::class);
    }
}
