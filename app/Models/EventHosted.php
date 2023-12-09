<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class EventHosted extends Model
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $table = "events_hosted";

    protected $fillable = [
        'event_name',
        'venue',
        'date',
        'no_of_tickets',
        'price',
        'description'
        // Add more fields as needed
    ];

    // Add any relationships or additional methods here
}
