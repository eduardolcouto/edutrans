<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['prefix'=>'api'], function(){
	Route::group(['prefix'=>'historico-mensagem'],function(){
		Route::post('store',['as'=>'api.store','uses'=>'HistoricoMensagensController@store']);
		Route::get('show/{placa}',['as'=>'api.show','uses'=>'HistoricoMensagensController@show']);
		//Route::update('update/{historico}',['as'=>'api.update','uses'=>'HistoricoMansagemController@update']);
	});
	
});