<?php




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//main route
Route::get('/',array('as'=>'home', function()
{
	return View::make('hello');
}));











Route::resource('tweets', 'TweetsController');



Route::resource('specificationpoints', 'SpecificationpointsController');

Route::resource('specifications', 'SpecificationsController');

Route::resource('units', 'UnitsController');

Route::resource('papers', 'PapersController');
