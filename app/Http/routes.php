<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 				function () { return view('app'); });
Route::get('/home', 			function () { return view('pages.home'); });
Route::get('/uvod', 			function () { return view('pages.uvod'); });
Route::get('/o-nas', 			function () { return view('pages.onas'); });
Route::get('/dornova-metoda', 	function () { return view('pages.dornova_metoda'); });
Route::get('/bankovanie', 		function () { return view('pages.bankovanie'); });
Route::get('/sm-system', 		function () { return view('pages.sm_system'); });
Route::get('/reflexologia', 	function () { return view('pages.reflexologia'); });
Route::get('/bud-fit', 			function () { return view('pages.bud_fit'); });
Route::get('/referencie', 		function () { return view('pages.referencie'); });
Route::get('/cennik', 			function () { return view('pages.cennik'); });
Route::get('/kontakty', 		function () { return view('pages.kontakty'); });
Route::post('/message',			'PagesController@message');