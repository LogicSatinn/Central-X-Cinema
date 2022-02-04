<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    public $fillable = [
        'name', 'quality', 'no_of_seats', 'theatre_id'
    ];

    public function theatre()
    {
        return $this->belongsTo(Theatre::class);
    }

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
