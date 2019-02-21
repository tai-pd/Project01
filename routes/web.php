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

//Controller

Route::get('goiController1', 'myController@m_controller1');

Route::get('goiController2/{round}', 'myController@m_controler2');

//URL

Route::get('getMyURL', 'myController@getURL'); 

// form
Route::get('getForm', function(){
	return view('MyForm');
});

Route::post('postForm', 'myController@postForm')->name('myPostForm1');

// Cookie
Route::get('setCookies', 'myController@setCookies')->name('setMyCookie');

Route::get('getCookies', 'myController@getCookies')->name('getMyCookie');

// upload File

Route::get('uploadFile', function(){
	return view('postFile');
});

Route::post('postFileUpload', 'myController@uploadFile')->name('updaloadMyFile');

// json

Route::get('getJson', 'myController@getJson')->name('getMyJson');

// truyen du lieu tren view 
Route::get('myView', 'myController@myView')->name('getMyView');

Route::get('setTime/{t}', 'myController@Time')->name('setMyTime');

View::share('myViable', 'Hello this is variable shared');

// blade template 

Route::get('blade', function(){
	return view('pages.page1');
});

Route::get('BaldeTemplete/{template}', 'myController@blade');
