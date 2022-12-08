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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/home/pasien', function (){
    return view ('pasien');
})->name('home')->middleware('auth');

Route::get('/home/spesialis', function (){
    return view ('spesialis');
})->name('home')->middleware('auth');

Route::get('/home/kamar', function (){
    return view ('kamar');
})->name('home')->middleware('auth');

Route::get('/home/dokter', function (){
    return view ('dokter');
})->name('home')->middleware('auth');
