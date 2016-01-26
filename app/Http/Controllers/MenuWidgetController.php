<?php

namespace App\Http\Controllers;

use App\MenuWidget;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class MenuWidgetController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'menu' => 'required|numeric',
            'widget' => 'required|numeric',
            'row' => 'numeric',
            'col' => 'numeric',
            'sizex' => 'numeric',
            'sizey' => 'numeric',
            'user' => 'numeric',
        ]);
        $menuWidget = new MenuWidget();

        $menuWidget->menu = $request->menu;
        $menuWidget->widget = $request->widget;
        if(!isset($request->user))
            $user = Auth::id();
        else{
            $user = $request->user;
        }
        $menuWidget->user = $user;
        if(isset($request->row))
            $menuWidget->row = $request->row;
        if(isset($request->col))
            $menuWidget->col = $request->col;
        if(isset($request->sizex))
            $menuWidget->sizex = $request->sizex;
        if(isset($request->sizey))
            $menuWidget->sizey = $request->sizey;

        $menuWidget->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



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

        $validator = Validator::make($request->all(), [
            'row' => 'numeric',
            'col' => 'numeric',
            'sizex' => 'numeric',
            'sizey' => 'numeric',
        ]);

        if ($validator->fails()) {
            return $validator->messages()->toJson();
        }

        $menuWidget = MenuWidget::find($id);

        if(isset($request->row))
        $menuWidget->row = $request->row;
        if(isset($request->col))
        $menuWidget->col = $request->col;
        if(isset($request->sizex))
        $menuWidget->sizex = $request->sizex;
        if(isset($request->sizey))
        $menuWidget->sizey = $request->sizey;
        $menuWidget->save();
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
