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

// $users = DB::select('SELECT * from users');   //raw SQL
// $users = DB::table('users')->get();           //fluent query builder
// $users = App\User::all();                     //Eloquent ORM 

Route::get('/', function() {
    return View::make('welcome');
});

// Route::get('about',            'pagesController@about'); 
Route::get('mcs/view/{id}',    'pagesController@view');
Route::get('mcs/users',        'pagesController@users');
Route::delete('remove/{id}/',  'pagesController@destroy');
Route::patch('update/{id}',    'pagesController@update');
Route::get('mcs/modify/{id}',  'pagesController@modify');

Route::get('create',        'formController@create');
Route::post('store',       'formController@store');
Route::get('edit/{id}',    'formController@edit');
Route::patch('edit/{id}',  'formController@update');


// Route::resource('form',  'formController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
