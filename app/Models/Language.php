<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    public $fillable = ['name'];

    public function movie()
    {
        return $this->belongsToMany(Movie::class);
    }
}
