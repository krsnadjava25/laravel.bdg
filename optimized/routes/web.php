<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ViewController@welcome');

// 3rd Power: Database Chunking
Route::get('/without-chunk', 'DataController@withoutChunk');
Route::get('/with-chunk', 'DataController@withChunk');

// 4th Power: Object Caching
Route::get('/with-cache', 'DataController@withCache');

// 5th Power: Laravel Mix
Route::get('/multiple', 'ViewController@multiple');
Route::get('/single', 'ViewController@single');
