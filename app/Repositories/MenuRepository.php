<?php

namespace App\Repositories;


use App\Menu;
use Illuminate\Database\Eloquent\Collection;

class MenuRepository
{
    /**
     * Get all
     * @return Collection
     */
    public function getAll()
    {

        $menus = Menu::all();
        return $menus;
    }

    /**
     * Get all
     * @return Collection
     */
    public function getParents()
    {

        $menus = Menu::where('parentMenu',0)->get();
        return $menus;
    }
}