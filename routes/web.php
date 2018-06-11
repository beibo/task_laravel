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

Route::get('/index',"HomeController@index");
Route::get('/',"HomeController@index");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addEmployee','HomeController@addEmployee');
Route::post('/addEmployee','employeeController@store');
Route::get("/addLocation","employeeController@addLocation");
Route::get("/delete/{id}",'HomeController@delete');
Route::get("/edit/{id}","HomeController@edit");
Route::post('/edit/{id}',"employeeController@update");
Route::post("executeSearch", array('uses' =>"SearchController@executeSearch" ));

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function() {
    Route::get('user', function (Request $request) {
        return $request->user();
    });
    Route::resource('employee', 'employeeController');
    Route::resource('search', 'searchController@getSearchResults'); //search route
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/searchContent','searchController@searchContent');
