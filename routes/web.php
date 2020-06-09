<?php

use Illuminate\Support\Facades\Route;

//................................About controller calling .........................................
Route::get('specialties','AboutController@specialties');
Route::get('why_choose','AboutController@why_choose');
Route::get('designing','AboutController@designing');
Route::get('information_technology','AboutController@information_technology');
Route::get('website_hosting','AboutController@website_hosting');
Route::get('our_dream_vision','AboutController@our_dream_vision');
Route::get('db_solution','AboutController@db_solution');
Route::get('our_db_solutions','AboutController@our_db_solutions');
Route::get('technology','AboutController@technology');
Route::get('terms_and_conditions','AboutController@terms_and_conditions');
Route::get('energy_saving_websites','AboutController@energy_saving_websites');
Route::get('about_us','AboutController@about_us');


//................................Home controller calling .........................................
Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('/layout', function(){
	return view('layout');
});

//................................Package controller calling .........................................
Route::get('/packages','PackagesController@packages');
Route::get('/website_packages','PackagesController@web_packages');
Route::get('/starter_website_package','PackagesController@starter_web_package');
Route::get('/dynamic_website_package','PackagesController@dynamic_web_package');

//................................Service controller calling .........................................

