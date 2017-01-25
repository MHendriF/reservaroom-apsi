<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DB_Reservation extends Model
{
	/*
    protected $fillable = [
    	'id_reservation', 'id_user', 'id_room', 'id_proposal', 'startdate', 'enddate',
    ];
    protected $hidden = [
        'password', 'remember_token', 
    ];
    */

    protected $table = 'db_reservation';
}
