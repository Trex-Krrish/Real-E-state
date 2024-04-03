<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HousePhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'path', // Assuming you only need to store the path of the photo
    ];

    // Define any relationships here, if needed
    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
