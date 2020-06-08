<?php

use Illuminate\Support\Facades\Route;


Route::get('/','aboutController@index');
Route::get('/index','aboutController@index');
Route::get('specialties','aboutController@specialties');
Route::get('why_choose','aboutController@why_choose');
Route::get('template','aboutController@template');
