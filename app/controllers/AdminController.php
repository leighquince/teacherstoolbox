<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Admin Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'AdminController@showWelcome');
	|
	*/
	
	
	
	public function __construct(){
		
		Session::flash('breadcrumb','<span class="divider">/</span> 
									<a href="#" class="bread-current">Dashboard</a>
								'
					);
		Session::flash('currentPage','<h2 class="pull-left"><i class="icon-home"></i> Dashboard</h2>'
					);
	}
	
	public function index()
	{
		
		 
		 $view = View::make('admin.index');
		 
		 
		 
		return $view;

		
		
		
	}

}