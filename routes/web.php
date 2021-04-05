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

use App\Tenant;

Route::get('/', function () {

    App\Tenant::all()->runForEach(function () {
        factory(App\User::class)->create();
    });

//    return view('welcome');

});
