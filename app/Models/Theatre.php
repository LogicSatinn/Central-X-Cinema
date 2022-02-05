<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    use HasFactory;

    public $fillable = [
        'name', 'region_id', 'location'
    ];

    public function halls()
    {
        return $this->hasMany(Hall::class);
    }


    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
