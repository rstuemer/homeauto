<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class MenusController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::All();
        return View("menus.index",["menusList"=>$menus,"menuEditPath"=>"Menus"]);
    }

    public function listAll(){
        $inputs = Input::all();
        $menus = Menu::All();


        if(isset($inputs['valueColumn']) && isset($inputs['textColumn'] ) ){
            $returnValues = array();
            foreach($menus as $menu){
                $returnValues[] = array('value'=>$menu->$inputs['valueColumn'], 'text'=>$menu->$inputs['textColumn']);
            }
        }else{
            $returnValues = $menus;
        }
        return response()->json( $returnValues );
    }


    public function postQuickUpdate()
    {
        $inputs = Input::all();
        $menu = Menu::find($inputs['pk']);
        $menu->$inputs['name'] = $inputs['value'];

        Log::info( "menu save". $menu->id ." " .$menu->name);
        $menu->save();
        return "test";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               return "store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
