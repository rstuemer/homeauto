<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Task;
use Illuminate\Http\Request;



/*
 * AUTH ROUTES
 */


//View::composer('includes.headernav', 'App\Composers\MenuComposer');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
/*
 * AUTH ROUTES END
 */


$menus = \App\Menu::All();

foreach ($menus as $menu) {


	if($menu->parentMenu!=0) {
		$parentMenu = $menu->parentMenuModel;
		$path = $parentMenu->target . $menu->target;
	}else{
		$path = $menu->target;
	}
	if($menu->type == 'dashboard' ) {
		Route::get($path, function () use ($menu) {

			$userId = Auth::id();
			$widgetsMenu = \App\MenuWidget::where(array('menu' => $menu->id, 'user' => $userId))->get();

			$view = view('menuDashboard', [
				'menuWidgets' => $widgetsMenu,
				'activMenu' => $menu->id
			]);
			return $view;
		});
	}else if ($menu->type == 'singlePage'  ){
		$target = str_replace("/","",$menu->target);
		Route::resource($path, $target .'Controller');
		Route::put($path."/{Menus}/quick_update",$target .'Controller@postQuickUpdate');
		Route::get('API'.$path,$target .'Controller@listAll');
	}
}





Route::any('/', function()
{
	$tasks = Task::orderBy('created_at', 'asc')->get();
	$view = view('tasks',[
		'tasks' => $tasks
	]);
	return $view;
});

/**Route::get('/dashboard',function(){

	$tasks = Task::orderBy('created_at', 'asc')->get();
	$view = view('tasks',[
		'tasks' => $tasks
	]);
	return $view;
});
 *
 * */

/**
 * Show Task Dashboard
 */
Route::get('/tasks', function () {
	$tasks = Task::orderBy('created_at', 'asc')->get();
	$view = view('tasks',[
		'tasks' => $tasks
	]);
	return $view;
});
/**
 * Add New Task
 */
Route::post('/task', function (Request $request) {
	$validator = Validator::make($request->all(), [
		'name' => 'required|max:255',
	]);

	if ($validator->fails()) {
		return redirect('/')
			->withInput()
			->withErrors($validator);
	}

	$task = new Task;
	$task->name = $request->name;
	$task->save();

	return redirect('/');
});


/**
 * Delete Task
 */
Route::delete('/task/{id}', function ($id) {
	Task::findOrFail($id)->delete();

	return redirect('/');
});

Route::get('alarmsystem/{alarmsystem}',function($id){
	$alarmSystem = \App\Alarmsystem::findOrFail($id);

	$view = view('alarmsystem.statusWidget',[
		'alarmsystem' => $alarmSystem
	]);
	return $view;
});

Route::resource('widgets', 'WidgetsController');
Route::resource('menuWidget', 'MenuWidgetController');

Route::get('profile', [
	'uses' => 'ProfileController@show'
]);

//Secure ROUTES
Route::any('/', array('before' => 'auth', 'uses' => 'Auth\AuthController@getLogin'));


