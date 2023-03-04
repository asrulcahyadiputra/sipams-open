<?php

use App\Http\Controllers\AuthController;
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

// Halaman Root
Route::get('/', function () {
    if (!Session::has('is_login')) {
        return view('auth.auth');
    }
    return redirect('/sipams');
});

// AUTH
Route::get('/login', function () {
    if (!Session::has('is_login')) {
        return view('auth.auth');
    }
    return redirect('/sipams');
})->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('cek_login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// load Menu/Modul
Route::get('/menu/{id}', function ($id) {
    if (!Session::has('is_login')) {
        return view('sesi');
    } else {
        $tmp = explode("-", $id);

        if (isset($tmp[1])) {
            return view($tmp[0] . '.' . $tmp[1]);
        } else {
            return view($id);
        }
    }
});

Route::get('/cek_session', [AuthController::class, 'cekAuth']);

Route::get('/sesi-habis', function () {
    return view('sesi_habis');
})->name('sesi');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/sipams', [SipamsDashboardController::class, 'index']);
});
