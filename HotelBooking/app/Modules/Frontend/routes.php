<?php
	Route::get('/vue',function(){
		return view('Frontend::vue');
	});

	Route::get('/test',function(){
		return view('Frontend::room-info');
	});

	Route::get('/',[
		'as' => 'home',
		'uses' => 'PageController@index'
	]);

	Route::get('/home.html',[
		'as' => 'home',
		'uses' => 'PageController@index'
	]);

	Route::get('/about.html',[
		'as' => 'about',
		'uses' => 'PageController@about'
	]);

	Route::get('/contact.html',[
		'as' => 'contact',
		'uses' => 'PageController@contact'
	]);

	Route::get('/blog.html',[
		'as' => 'blog',
		'uses' => 'PageController@blog'
	]);

	Route::get('/all-hotels.html',[
		'as' => 'allHotels',
		'uses' => 'PageController@allHotels'
	]);
	Route::get('/hotel-info.html',[
		'as' => 'hotelInfo',
		'uses' => 'PageController@hotelInfo'
	]);

	Route::get('/single-blog.html',[
		'as' => 'singleBlog',
		'uses' => 'PageController@singleBlog'
	]);

	Route::get('/register.html',[
		'as' => 'register',
		'uses' => 'PageController@register'
	]);

	Route::post('/login',[
		'as' => 'login',
		'uses' => 'PageController@postLogin'
	]);

	Route::post('/following',[
		'as' => 'follow',
		'uses' => 'PageController@alert'
	]);
