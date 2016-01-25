<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sensors';

    /**
     * Get the room that owns the Sensor.
     */
    public function room()
    {
        return $this->belongsTo('App\Room');
    }
}
