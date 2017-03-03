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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Display All Tasks
 */
Route::get('/oils', function () {
	//
	return view('oils-list');
});

/**
 * Add A New Task
 */
Route::post('/oils/add', function (Request $request) {
	//
});
