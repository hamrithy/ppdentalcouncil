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

Route::get('/', function () {
    return view('Home');
});
Route::get('Home','HomeController@index');
Route::get('structure','StructureController@index');
Route::get('news','NewsController@index');
Route::get('visionary','VisionaryController@index');
Route::get('benifits','BenifitController@index');
Route::get('mission','MissionController@index');
Route::get('member','memberController@index');
Route::get('register','RigisterController@index');
Route::get('about','AboutController@index');
Route::get('contact','ContactController@index');
Route::get('legal','LegalController@index');
Route::get('legal1','Legal1Controller@index');
Route::get('legal2','Legal2Controller@index');
Route::get('legal3','Legal3Controller@index');
//Route::get('cst_admin','CstadminController@index');
//Route::get('admin/cst_admin','CstadminController@index');
Route::get('article','ArticleController@index');



Route::group(['prefix' => 'admin'], function(){
    Route::get('dashboard', 'Admin\HomeController@index');
    Route::get('content','Admin\ContentController@index');
    Route::get('content/create','Admin\ContentController@create');
    Route::post('content/create','Admin\ContentController@store');
    Route::get('content/edit/{id}','Admin\ContentController@edit');
    Route::post('content/edit/{id}','Admin\ContentController@save');
    Route::get('content/delete/{id}', 'Admin\ContentController@delete');
});



