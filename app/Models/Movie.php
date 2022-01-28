<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public $fillable = [
        'name', 'description', 'genre', 'release_date'
    ];

    protected $dates = ['release_date'];
}
