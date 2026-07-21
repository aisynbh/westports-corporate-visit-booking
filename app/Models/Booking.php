<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'organization_name',
        'date',
        'arrival_time',
        'end_time',
        'port_tour_time',
        'escort_booking_time',
        'safety_briefing_venue',
        'safety_briefing_time',
        'safety_briefing_language',
        'signage',
        'souvenir',
        'room_id',
        'department_id',
        'user_id',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}