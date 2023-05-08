<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {

    $data = [
        'name' => 'Enrico',
        'surname' => "D'Erasmo",
    ];

    return view('home', $data);
})->name('home');


Route::get('/new', function() {

    return view('new');
})->name('new');


Route::get('/popoular', function() {

    return view('popoular');
})->name('popoular');

Route::get('/watchlist', function() {

    return view('watchlist');
})->name('watchlist');
