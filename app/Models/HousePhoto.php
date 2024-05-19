<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HousePhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'path', 
        'house_id'
    ];

    
    public function house()
    {
        return $this->belongsTo(House::class);
    }

    static function getPhoto($houseId)
    {
        return HousePhoto::where('house_id', $houseId)->first();
    }
}
