<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizers extends Model
{
    //
    protected $fillable = [
        'organizer_id', 
        'organizer_name',
        'organizer_password',
        'organizer_email',
        'organizer_phone',
        'organizer_institution_id',
        'organizer_status'
    ];
}
