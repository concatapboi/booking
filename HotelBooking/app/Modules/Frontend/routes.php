<?php
	Route::get('/vue',function(){
		return view('Frontend::vue');
	});

	Route::get('/test',function(){
		return ;
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

	Route::get('/login.html',[
		'as' => 'login',
		'uses' => 'PageController@register'
	]);

	Route::post('/login',[
		'as' => 'postLogin',
		'uses' => 'PageController@postLogin'
	]);

	Route::post('/following',[
		'as' => 'follow',
		'uses' => 'PageController@alert'
	]);

	Route::get('/customer',[
		'as' => 'customer',
		'uses' => 'CustomerController@index'
	]);

	Route::get('/logout.html',[
		'as' => 'logout',
		'uses' => 'CustomerController@logout'
	]);

	Route::get('/abc',function(){
		dd(Auth::user());
	});
