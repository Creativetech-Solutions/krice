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
    return view('pages.home');
})->middleware('login');



Route::get('/roles/view',  'RolesController@view')->name('user.view');;
Route::get('/roles/create',  'RolesController@create')->name('user.create');;
Route::post('/roles/create',  'RolesController@post_create')->name('user.post_create');;
Route::get('/role/{slug}',  'RolesController@edit')->name('user.edit');;
Route::put('/role/update/{id}',  'RolesController@update')->name('role.update');
Route::put('/role/destroy/{id}',  'RolesController@destroy')->name('role.destroy');

Route::get('/users/view', 'UsersController@view')->name('user.view');;
Route::get('/users/create', 'UsersController@create')->name('user.create');;
Route::post('/users/create', 'UsersController@post_create')->name('user.post_create');;
Route::get('/user/{id}',  'UsersController@edit')->name('user.edit');;
Route::put('/user/update/{id}',  'UsersController@update')->name('user.update');
Route::put('/user/destroy/{id}',  'UsersController@destroy')->name('user.destroy');
Route::put('/user/activate/{id}',  'UsersController@activate')->name('user.activate');
Route::put('/user/deactivate/{id}',  'UsersController@deactivate')->name('user.deactivate');


Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postlogin');
Route::post('/logout', 'LoginController@logout');

Route::resource('categories', 'CategoriesController');
Route::resource('products', 'ProductsController');

Route::resource('cities', 'CitiesController');
Route::resource('areas', 'AreasController');

