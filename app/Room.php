<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rooms';


    /**
     * Get the actory for the room.
     */
    public function actors()
    {
        return $this->hasMany('App\Actors',"room");
    }



    /**
     * Get the Sensors for the room.
     */
    public function sensors()
    {
        return $this->hasMany('App\Sensor',"room");
    }
}
