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

Route::get('/', function () {
   $comics = config('comics');
    // dump($comics);
    return view('home', ['comics' => $comics]);
});

Route::get('/comics', function () {
    return view('comics');
});

// Route::get('/comics', function () {
//     $array_comics = config('albums');
//     $data = ['albums' => $array_comics];

//     return view('comics', $data);
// })-> name ('pagine-comics');
