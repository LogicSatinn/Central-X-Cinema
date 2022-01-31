<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public $fillable = [
        'name', 'description', 'release_date', 'runtime'
    ];

    protected $dates = ['release_date'];

    protected function getRuntimeAttribute($value)
    {
        return Carbon::parse($value)->hour . ' hours, ' . Carbon::parse($value)->minute . ' minutes';
    }
}
