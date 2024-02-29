<?php

use App\Http\Controllers\EventUserController;
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
    return view('welcome');
});

// Route::get('user/create', function () {
//     return view('user.create');
// });

// Route::get('user/show', function () {
//     return view('user.show');
// });

Route::get('/user', [EventUserController::class, 'index'])->name('user.index');
Route::get('/user/create', [EventUserController::class, 'create'])->name('user.create');
Route::post('/user', [EventUserController::class, 'store'])->name('user.store');
Route::get('/user/show', [EventUserController::class, 'show'])->name('user.show');
Route::get('/user/{user}/edit', [EventUserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}', [EventUserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [EventUserController::class, 'destroy'])->name('user.destroy');