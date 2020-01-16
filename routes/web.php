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
    return view('welcome');
});

Route::get('/hello', function() {
    return view('hello');
});

Route::prefix('week02')->group(function() {
    Route::get('/', function() {
        return view('week02');
    })->name('week02');

    Route::get('/ta02', function() {
        return view('ta02');
    });
});

Route::prefix('week03')->group(function() {
    Route::get('/', 'ShoppingProductsController@index')->name('week03');
    Route::get('cart', 'ShoppingProductsController@cart');
    Route::get('add-to-cart/{id}', 'ShoppingProductsController@addToCart');
    Route::patch('update-cart', 'ShoppingProductsController@update');
    Route::delete('remove-from-cart', 'ShoppingProductsController@remove');
    Route::get('checkout', 'ShoppingProductsController@checkout');
    Route::post('submit-order', 'ShoppingProductsController@submit');
    Route::get('confirmation', 'ShoppingProductsController@confirmation');
});


// Route::get('/week04', function () {
//     return view('welcome');
// });

// Route::get('/week05', function () {
//     return view('welcome');
// });

// Route::get('/week06', function () {
//     return view('welcome');
// });

// Route::get('/week07', function () {
//     return view('welcome');
// });

// Route::get('/team-activities', function () {
//     return view('team_activities');
// });
