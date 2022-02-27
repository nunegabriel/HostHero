<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|s', function() {
    return view('News');
})-> name('News');

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/landing', function () {
    return view('landing');
  })  -> name('landing');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/news', function() {
    return view('news');
})-> name('news');

// columns

Route::get('/news1', function() {
    return view('news1');
})-> name('news1');
Route::get('/captaincy', function() {
    return view('col1');
})-> name('col1');
Route::get('/low-budget', function() {
    return view('col2');
})-> name('col2');
Route::get('/injuries', function() {
    return view('col3');
})-> name('col3');
Route::get('/cleansheet', function() {
    return view('col4');
})-> name('col4');
Route::get('/shotstoppers', function() {
    return view('col5');
})-> name('col5');
Route::get('/players-to-own', function() {
    return view('col6');
})-> name('col6');
Route::middleware(['auth:sanctum', 'verified'])->get('/more', function() {
    return view('col7');
})-> name('col7');


// logged
Route::middleware(['auth:sanctum', 'verified'])->get('/captaincy1346', function() {
    return view('col8');
})-> name('col8');
Route::middleware(['auth:sanctum', 'verified'])->get('/low-budget1346', function() {
    return view('col9');
})-> name('col9');
Route::middleware(['auth:sanctum', 'verified'])->get('/injuries_123', function() {
    return view('col10');
})-> name('col10');
Route::middleware(['auth:sanctum', 'verified'])->get('/cleansheet531', function() {
    return view('col11');
})-> name('col11');
Route::middleware(['auth:sanctum', 'verified'])->get('/shotstoppers_3456', function() {
    return view('col12');
})-> name('col12');
Route::middleware(['auth:sanctum', 'verified'])->get('/players-to-own-2534', function() {
    return view('col13');
})-> name('col13');