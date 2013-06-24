<?php

class ICTReportController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Report Controller
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
									<a href="#" >Dashboard</a>
								<span class="divider">/</span> 
									<a href="#">Reports</a>
								<span class="divider">/</span> 
									<a href="#" class="bread-current">ICT Reports</a>'
					);
		Session::flash('currentPage','<h2 class="pull-left"><i class="icon-pencil"></i> Reports</h2>'
					);
	}
	
	
	public function index()
	{
		
		 
		 $view = View::make('admin.reports.ict');
		 
		 
		 
		return $view;		
	}
	
	
	public function getICTReports()
	{
		
		
		
		$view = View::make('admin.reports.ict');
		
		return $view;
		
		
		
	}
	
	
	public function postICTReports()
	{
		
		Input::flash();
		
		$name = Input::get('name');
		$gender = Input::get('gender');
		$attitude = Input::get('attitude');
		$deadlines = Input::get('deadlines');
		$theory = Input::get('theory');
		$practical = Input::get('practical');
		$independant = Input::get('independant');
		
		
		$ICTReport = new ICTReport($name,$gender,$attitude,$deadlines,$theory,$practical,$independant);
		
		
		
		
		
		
		
		Session::flash('copy-script',"$(document).ready(function(){

								    $('a#copy-report').zclip({
								        path:'".URL::asset('js/ZeroClipboard.swf')."',
								        copy:$('p#written-report').text()
								    });
								    
								    });");
		
		$view = View::make('admin.reports.ict')->with('report',$ICTReport->getReport());
		return $view;
		
		
		
	}
	
}