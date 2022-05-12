<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reservation extends Model
{
    use HasFactory, Notifiable;

    public $fillable = [
        'seat_number', 'status', 'schedule_id', 'reference_code'
    ];


    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

}
