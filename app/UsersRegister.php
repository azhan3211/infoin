<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersRegister extends Model
{
    //
    protected $fillable = [
        'user_register_id', 
        'user_register_user_id',
        'user_register_event_id',
        'user_register_date'
    ];
}
