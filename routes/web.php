<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpedienteController;
use App\Models\Expediente;
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
});
Route::get('/verexpediente', function () {
    return view('verexpedientes');
});


Route::resource('expedientes','App\Http\Controllers\ExpedienteController');

Route::get('/verexpedientes', [ExpedienteController::class, "show"]);
Route::post('/expedientes', [ExpedienteController::class, "store"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('tasks',\App\Http\Controllers\TaskController::class);
Route::resource('roles',\App\Http\Controllers\RolesController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
