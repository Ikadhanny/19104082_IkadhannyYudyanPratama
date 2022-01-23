<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;

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

// Melewati controllernya dulu
// Ketika kita mengakses URL beranda dengan metode GET
// maka kita akan diarahkan ke Controller dengan
// nama classnya adalah myController dan metodenya adalah index

// Penulisan laravel 8
// Route::get('beranda', 'myController@index');

// Penulisan laravel 8
Route::get('/beranda', [myController::class, 'index']);

// Langsung ke viewnya
// Route::view('/beranda', 'beranda');

// Route::get('/', [myController::class, 'index']);
// Route::get('/tentang', [myController::class, 'about']);

Route::get('/', function () {
    return view('beranda');
});

Route::get('/tentang', function () {
    return view('about');
});
