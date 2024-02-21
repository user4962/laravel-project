<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ParticipantController;

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

// Маршрут для стартової сторінки (welcome)
Route::get('/', function () {
    return view('welcome');
});

// Маршрут для форми реєстрації
Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store']);

// Маршрут для форми входу
Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);

// Маршрут для списку учасників
Route::get('/participants', [ParticipantController::class, 'index']);

// Маршрут для редагування учасників
Route::get('/edit/{id}', [ParticipantController::class, 'edit']);
Route::post('/edit/{id}', [ParticipantController::class, 'update']);

