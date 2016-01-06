<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Route::group(['middleware' => ['auth']], function () {
//	// CATCH ALL ROUTE =============================
//	// all routes that are not home or api will be redirected to the frontend
//	// this allows angular to route them
//    Route::get('{view}', function ($view) {
//	    try {
//	      return view($view);
//	    } catch (\Exception $e) {
//	      //abort(404);
//    	  //Redirecting to index since were using API
//	    	//return View::make('index');
//			return view('welcome');
//	    }
//	})->where('view', '.*');
//});

Route::group(['prefix' => 'api'], function() {
    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there

    //Routing using RESTful
    Route::resource('comments', 'CommentController', 
        array('only' => array('index', 'store', 'destroy')));
    //can route using get()
    Route::get('/', function () {
        return view('welcome');
    });
});

