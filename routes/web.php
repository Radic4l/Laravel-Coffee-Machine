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
    return view('home');
});

Route::get('/manage-stock', function () {
    return view('stock');
});

Route::get('/manage-change-machine', function () {
    return view('changeM');
});

route::get('/manage-drinks', 'mycontroller@list');

Route::get('/theme', function () {
    return view('theme');

});
