<?php


/*
|--------------------------------------------------------------------------
| Login Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/login',array('as'=>'login', function()
{	if(Auth::guest())
	{
		return View::make('login');
	}else{
		
		Session::flash('warnings',array('You are already logged in so we took you back to the dashboard'));
		
		
		return Redirect::to('admin');
	}
	
}));

Route::post('/login', function()
{
    // Validation? Not in my quickstart!
    // No, but really, I'm a bad person for leaving that out
    // Get the POST data
	$data = array(
		'email'      => Input::get('email'),
		'password'      => Input::get('password')
	);

	// Attempt Authentication
	if ( Auth::attempt($data) )
	{	
	
	
		Session::flash('successes',array('Thank you '.Input::get('email').', you are now logged in.'));

		// If user attempted to access specific URL before logging in
		if ( Session::has('pre_login_url') )
		{
			$url = Session::get('pre_login_url');
			Session::forget('pre_login_url');
			return Redirect::to($url);
		}
		else{
			return Redirect::to('admin');
			}
	}
	else
	{
		return Redirect::to('login')->with('login_errors', true);
	}
    
    
});



/*
|--------------------------------------------------------------------------
| Logout Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/logout', array('as' => 'logout', function () {
    if(Auth::guest()) return View::make('login');
    
    Auth::logout();
	return View::make('login')->with('success','nice you have logged out');
}));


