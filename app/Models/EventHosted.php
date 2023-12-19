<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class EventHosted extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "event_hosteds";
    protected $fillable = [
        'event_name',
        'venue',
        'date',
        'no_of_tickets',
        'price',
        'description',
        'start_time',
        'end_time',
        'status',
    ];
}
