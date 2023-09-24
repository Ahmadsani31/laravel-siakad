<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\User;
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
    return view('login');
    // return view('pages.blank-page', ['type_menu' => '']);
});

// Route::get('/login', [Auth::class, 'index'])->name('login');
Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard')->middleware('verified');
Route::get('/user', [User::class, 'index'])->name('user')->middleware('verified');
