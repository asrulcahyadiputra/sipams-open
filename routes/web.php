<?php

use App\Http\Controllers\SipamsDashboardController;
use Illuminate\Support\Facades\Session;
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
    if (!Session::has('is_login')) {
        return view('auth.auth');
    }
    return redirect('/sipams');
});

Route::get('/login', function () {
    if (!Session::has('is_login')) {
        return view('auth.auth');
    }
    return redirect('/sipams');
})->name('login');

Route::get('/sesi-habis', function () {
    return view('sesi_habis');
})->name('sesi');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/sipams', [SipamsDashboardController::class, 'index']);
});
