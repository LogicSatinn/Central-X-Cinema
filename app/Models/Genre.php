<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public $fillable = [
        'name'
    ];

    protected $dates = ['created_at'];

    public function movie()
    {
        return $this->belongsToMany(Movie::class);
    }
}
