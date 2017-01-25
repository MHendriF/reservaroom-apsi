<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'DB_Reservation';

    public function pilihuser(){
    	return $this->belongsTo('App\User', 'id_user');
    }

    public function pilihroom(){
    	return $this->belongsTo('App\Room', 'id_room');
    }

    protected $fillable = [
        'id_user', 'id_room', 'event_name', 'startdate', 'enddate', 'proposal', 'permission_status', 'proposal_status', 'endstatus', 
    ];
}
