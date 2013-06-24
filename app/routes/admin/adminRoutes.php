<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('before' => 'auth'), function()
{

	//admin routes
	Route::get('/admin', 'AdminController@index');
	
	
	//profile Routes
	Route::get('/admin/profile', 'ProfileController@index');
	
	
	/*
	|-----------------------------------------------------------------------------
	| Report Routes
	|-----------------------------------------------------------------------------
	*/
		/*
		|--------------------------------------------------------------------------
		| GET Report Routes
		|--------------------------------------------------------------------------
		*/
		Route::get('/admin/reports', 'ReportController@index');		
		Route::get('/admin/reports/ict', 'ICTReportController@getICTReports');

		
		/*
		|--------------------------------------------------------------------------
		| POST Report Routes
		|--------------------------------------------------------------------------
		*/
	
		Route::post('/admin/reports/ict', 'ICTReportController@postICTReports');
	
	
	
	
	
	
	
	/*
	|-----------------------------------------------------------------------------
	| paperGenerator Routes
	|-----------------------------------------------------------------------------
	*/
	
	
		/*
		|-----------------------------------------------------------------------------
		| Question Routes
		|-----------------------------------------------------------------------------
		*/
			/*
			|--------------------------------------------------------------------------
			| Route Model
			|--------------------------------------------------------------------------
			*/
			
			Route::model('question', 'Question');
			
			
			/*
			|--------------------------------------------------------------------------
			| Route resources -- currently unable to support nested url
			|--------------------------------------------------------------------------
			*/
			
			//Route::resource('admin/paperGenerator/questions', 'QuestionsController');
			
			
			
			
			/*
			|--------------------------------------------------------------------------
			| GET questions Routes
			|--------------------------------------------------------------------------
			*/
			
			Route::get('/admin/paperGenerator/questions', array('uses'=>'QuestionsController@index', 'as'=>'admin.paperGenerator.questions.index'));
			Route::get('/admin/paperGenerator/questions/create',array('uses'=> 'QuestionsController@create', 'as'=>'admin.paperGenerator.questions.create'));
			Route::get('/admin/paperGenerator/questions/{id}',array('uses'=> 'QuestionsController@show', 'as'=>'admin.paperGenerator.questions.show'));
			Route::get('/admin/paperGenerator/questions/{id}/edit',array('uses'=> 'QuestionsController@edit', 'as'=>'admin.paperGenerator.questions.edit'));
			
			/*
			|--------------------------------------------------------------------------
			| POST questions Routes
			|--------------------------------------------------------------------------
			*/
			Route::post('/admin/paperGenerator/questions',array('uses'=> 'QuestionsController@store', 'as'=>'admin.paperGenerator.questions.store'));
			
			/*
			|--------------------------------------------------------------------------
			| Delete questions Routes
			|--------------------------------------------------------------------------
			*/

			Route::delete('/admin/paperGenerator/questions/{id}',array('uses'=> 'QuestionsController@destroy', 'as'=>'admin.paperGenerator.questions.destroy'));
			/*
			|--------------------------------------------------------------------------
			| Put/Patch questions Routes
			|--------------------------------------------------------------------------
			*/

			Route::put('/admin/paperGenerator/questions/{id}',array('uses'=> 'QuestionsController@update', 'as'=>'admin.paperGenerator.questions.update'));
		


});

