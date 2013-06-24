<?php
/*
|--------------------------------------------------------------------------
| Admin Composers
|--------------------------------------------------------------------------
|
| These will append default views and data onto admin pages
|
*/






	View::composer(array('admin.layouts.base'), function($view)
	{
	    $head_data = array(
		 	'css' => array(/*HTML::style('css/index.css" type="text/css" media="screen')*/),
		 	'title' => "Teachers Tool Box - Admin"
		 	
		 	);
		 	
		 	
		 	
		 $footer_data = array(
		 	'script' => array( /*HTML::script('js/index-slider.js" type="text/javascript"')*/)
		 	
		 	);
		 
		 
		 

		 $view->nest('head', 'admin.inc.head', $head_data);
		 $view->nest('nav', 'admin.inc.nav');
		 $view->nest('pageHeader', 'admin.inc.pageHeader');
		 $view->nest('sidebar', 'admin.inc.sidebar');
		 $view->nest('contentHeading', 'admin.inc.contentHeading');
		 $view->nest('footer', 'admin.inc.footer', $footer_data);
		 
		 
	});
	
	
	View::composer('admin.inc.pageHeader', function($view)
	{
		$view->with('test','hippo');
	});