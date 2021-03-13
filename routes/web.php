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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello/{name}', function($name =null){
//     if($name == null) {
//         return"hello there...";
//     }else{
//         return "hello ".$name;
//     }

// });

// Route::get('/coba/', [App\Http\Controllers\cobaController::class, 'index'])->name('home');

Route::get('/home/', [App\Http\Controllers\BladeController::class, 'index'])->name('home');
Route::get('/contact/', [App\Http\Controllers\BladeController::class, 'contact'])->name('contact');
Route::get('/about/', [App\Http\Controllers\BladeController::class, 'about'])->name('about');
