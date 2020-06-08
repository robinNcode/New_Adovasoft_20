<?php

use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('/layout', function(){
	return view('layout');
});
Route::get('specialties','AboutController@specialties');
Route::get('why_choose','AboutController@why_choose');
Route::get('template','AboutController@template');
