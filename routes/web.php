<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;
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
})->name("welcome");
Route::get('event', [EvenementController::class,"index"])->name("event.index");
Route::get('event/create', [EvenementController::class,"create"])->name("event.create");
Route::post('event', [EvenementController::class,"store"])->name("event.store");

