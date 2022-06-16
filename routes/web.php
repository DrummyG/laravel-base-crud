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
use App\Comic;

Route::get('/', 'ComicController@index')->name('home');

Route::resource('comics', 'ComicController');

// Route::get('/delete', 'ComicController@warn')->name('delete');

// Route::get('/show', 'ComicController@show')->name('show');

// Route::get('/delete', function () {
//     $comic = Comic::findOrFail($id);
//     return view('delete', compact('comic'));
// })->name('delete');
