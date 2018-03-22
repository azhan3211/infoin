<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersInfoin extends Model
{
    //
    protected $fillable = [
        'user_id', 
        'user_fullname',
        'user_email',
        'username',
        'user_password',
        'user_address',
        'user_phone',
        'user_institution_id',
        'user_status',
        'user_date_of_birth',
        'user_city'
    ];
}
