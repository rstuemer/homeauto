<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{



    /**
     * Get the post that owns the comment.
     */
    public function parentMenuModel()
    {
        return $this->belongsTo('App\Menu','parentMenu','id');
    }

    public function childMenus(){
        return $this->hasMany('App\Menu','parentMenu','id');
    }
}
