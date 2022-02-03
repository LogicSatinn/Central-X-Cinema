<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    use HasFactory;

    public $fillable = [
        'name', 'region', 'location'
    ];

    public function halls()
    {
        return $this->hasMany(Hall::class);
    }
}
