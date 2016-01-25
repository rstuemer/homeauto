<?php



namespace App\Http\Composers;

use Illuminate\View\View;
use App\Repositories\MenuRepository as MenuRepository;
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 22.01.16
 * Time: 15:30
 */
class MenuComposer
{



    protected $menus;
    private $activeMenu;

    /**
     * Create a new menu composer.
     *
     * @param  MenuRepository  $menus

     */
    public function __construct(MenuRepository $menus)
    {
        // Dependencies automatically resolved by service container...
        $this->menus = $menus;
    }


    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menus', $this->menus->getParents());
        //$view->with('activeMenu', $this->menus);
    }
}