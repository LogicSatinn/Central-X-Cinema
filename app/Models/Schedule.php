<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public $fillable = [
        'theatre_id', 'movie_id', 'hall_id', 'showtime', 'showdate', 'price'
    ];

    protected $dates = [
        'created_at', 'showdate'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function theatre()
    {
        return $this->belongsTo(Theatre::class);
    }

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }

    public function getShowTimeAttribute($value)
    {
        return Carbon::parse($value)->hour . ':' . Carbon::parse($value)->minute;
    }
}
