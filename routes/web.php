<?php

use App\Http\Controllers\SipamsDashboardController;
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

Route::get('/template-test', function () {
    return view('dashboard', ['title' => 'APP TEMPLATE']);
});
// Halaman Root
Route::get('/', function () {
    return view('auth.auth');
});

// load pertama kali ketiak login berhasil
Route::get('/sipams', [SipamsDashboardController::class, 'index']);
