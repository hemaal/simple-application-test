<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['room_id', 'user_id', 'start_time', 'end_time'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
