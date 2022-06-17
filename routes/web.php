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
    return redirect('login');
})->name('home');


Route::middleware('auth')->group(function () {
    Route::get('test', function () {
        return view('authenticated');
    });
});
Route::get('logout', function (){
   auth()->logout();
});
Route::get('register', function () {
    return view('register');
})->name('show.register');

Route::get('login', function () {
    return view('login');
})->name('show.login');

Route::post('register', [\App\Http\Controllers\RegisterController::class, 'registerNewUser'])->name('register');
Route::post('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');