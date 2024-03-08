<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('comics', function () {
    return view('comics');
})->name('comics');

Route::get('show/{index}', function ($i) {

    $comics = config('comics');
    foreach ($comics as $index => $c) {
        if ($i == $index) $comic = $comics[$index];
    };
    dump($i, $comic);


    return view('show', $comic);
})->name('show');
