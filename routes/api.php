<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('hello', function() { // anonymous function / clouser :: scope resolution operator / get method
	return ['id' => 1, "name" => "Aung Aung"];
});

Route::get('test', function() {
	$value = [
		[
			'id' => 1,
			'name' => 'Aung Aung'
		],
		[
			'id' => '2',
			'name' => 'Aung Aung'
		],
	];
	return ['data' => $value];
});
