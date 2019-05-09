<?php
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

Route::get('/',[
	'as' => 'home',
	'uses' => 'AdminController@index'
]);

Route::get('/test.html',[
	'as' => 'test',
	'uses' => 'AdminController@test'
]);

Route::get('/login.html',[
	'as' => 'login',
	'uses' => 'PageController@login'
]);

Route::post('/login.html',[
	'as' => 'postlogin',
	'uses' => 'PageController@postLogin'
]);

Route::get('/logout.html',[
	'as' => 'logout',
	'uses' => 'AdminController@logout'
]);

Route::get('/abc',function(){
	dd(Auth::guard('admin')->user());
});

Route::group(['prefix'=>'/manager'],function(){
	Route::get('/',[
		'as' => 'manager-home',
		'uses' => 'ManagerController@index'
	]);

	Route::get('/test.html',[
		'as' => 'manger-test',
		'uses' => 'ManagerController@test'
	]);

	Route::get('/login.html',[
		'as' => 'manager-login',
		'uses' => 'PageController@login'
	]);

	Route::post('/login.html',[
		'as' => 'manager-postlogin',
		'uses' => 'PageController@postLogin'
	]);

	Route::get('/logout.html',[
		'as' => 'manager-logout',
		'uses' => 'ManagerController@logout'
	]);

	Route::get('/abc',function(){
		dd(Auth::guard('manager')->user());
	});
});
