<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    public $fillable = ['name'];

    public function theatre()
    {
        return $this->hasMany(Theatre::class);
    }
}
