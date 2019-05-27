<?php
use App\Http\Controllers\mydemoapp;

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
    return view('header');
});

route::view('about','about');
route::view('test', 'navbar.test');
route::get('customers', 'CustomerController@list');

route::post('customers', 'CustomerController@store');