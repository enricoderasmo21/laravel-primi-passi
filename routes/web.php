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
        'back' => 'img/back-1.jpg'
    ];

    return view('home', $data);
})->name('home');


Route::get('/new', function() {

    $data =[
        'back' => 'img/back-2.jpg'
    ];

    return view('new', $data);
})->name('new');


Route::get('/popoular', function() {

    $data =[
        'back' => 'img/back-3.jpg'
    ];

    return view('popoular', $data);
})->name('popoular');

Route::get('/watchlist', function() {

    $data =[
        'back' => 'img/back-4.jpg'
    ];

    return view('watchlist', $data);
})->name('watchlist');
