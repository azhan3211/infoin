<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    //
    protected $fillable = [
        'event_id', 
        'event_organizer_id',
        'event_category_id',
        'event_name',
        'event_address',
        'event_date',
        'event_time'
    ];
}
