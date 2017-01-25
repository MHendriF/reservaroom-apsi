<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'DB_Room';

    public function reservasi(){
    	return $this->hasMany('App\Reservation');
    }

    protected $fillable = [
        'room_name', 'type', 'cost', 'capacity',
    ];
}
