<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Movie extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public $fillable = [
        'name', 'description', 'release_date', 'runtime'
    ];

    protected $dates = ['release_date'];

    protected function getRuntimeAttribute($value)
    {
        return Carbon::parse($value)->hour . ' hours, ' . Carbon::parse($value)->minute . ' minutes';
    }

    public function genre()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('pictures')
            ->singleFile();
    }
}
