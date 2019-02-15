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

Route::get('HelloLavarel',
function(){
	return 'Hello world';
});

Route::get('HelloLavarel/today/{today}', function($today){
	return 'hom nay la ngay : ' .$today;
});

Route::get('Route1/{route1}', ['as'=>'my_Route1', function($text){
	return 'this is my route :' .$text;
}]);

Route::get('Route2', function(){
	echo 'this is round 2';
})->name('my_Round2');

Route::get('GetRoute1', function($text){
	return redirect()->route('my_Route1', $text);
});

Route::get('GetRound2', function(){
	return redirect()->route('my_Round2');
});

Route::group(['prefix'=>'myGroup'], function(){
	Route::get('User1', function(){
		echo 'user1';
	});

	Route::get('User2', function(){
		echo 'user2';
	});

	Route::get('User3',function(){
		echo 'user3';
	});
});

Route::get('goiController1', 'myController@m_controller1');


