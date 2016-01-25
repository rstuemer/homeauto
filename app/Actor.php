<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'actors';



    /**
     * Get the room that owns the Actor.
     */
    public function room()
    {
        return $this->belongsTo('App\Room');
    }
}
