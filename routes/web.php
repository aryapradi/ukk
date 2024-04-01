<?php

use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\JelajahiControllers;
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

Route::get('/', function () {return view('main.index');});

// AUTH
Route::get('/login', [AuthControllers::class, 'showLoginForm']);
Route::get('/register', [AuthControllers::class, 'showRegisterForm']);


// Jelajahi
Route::get('/jelajahi', [JelajahiControllers::class, 'index']);

