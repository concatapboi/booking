<?php
use App\Models\User;



Route::get('/',function(){
	return view('Backend::login');
});
Route::get('/abc',function(){
	return User::all();
});

