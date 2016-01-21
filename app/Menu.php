<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{



    /**
     * Get the post that owns the comment.
     */
    public function parentMenu()
    {
        return $this->belongsTo('App\Menu');
    }

    public function childMenus(){
        return $this->hasMany('App\Menu');
    }
}
