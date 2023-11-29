<?php


use App\Http\Controllers\AwalwebController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\YourController;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Raute;

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
    return view('welcome');
});

Route::get('/awalweb', [AwalwebController::class, 'awalweb']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/postlogin', [LoginController::class, 'postLogin']);

Route::get('/beranda', [BerandaController::class, 'beranda']);
