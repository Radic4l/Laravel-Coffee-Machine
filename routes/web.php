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
/**
 * routes with controller
 */

route::get('manage-drinks', 'mycontroller@list');
route::get('drink/{id}', 'myController@details');

/**
 * Routes with function
 */

Route::get('/', function () {
    return view('home');
});

Route::get('/manage-stock', function () {
    return view('stock');
});

Route::get('/manage-change-machine', function () {
    return view('changeM');
});


// route::get("/show", 'mycontroller@show');

Route::get('/theme', function () {
    return view('theme');

});
