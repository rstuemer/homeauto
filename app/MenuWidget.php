<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuWidget extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menu_widget';


    /**
     * Get the phone record associated with the user.
     */
    public function User()
    {
        return $this->hasOne('App\User');
    }

    /**
     * Get the phone record associated with the user.
     */
    public function Widget()
    {
        return $this->hasOne('App\Widget',"id","widget");
    }

    /**
     * Get the phone record associated with the user.
     */
    public function Menu()
    {
        return $this->hasOne('App\Menu',"id","menu");
    }

}
