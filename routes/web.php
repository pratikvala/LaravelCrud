<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('create');
// });
Route::post('store', [UserController::class, 'store'])->name('store');
Route::get('create', [UserController::class, 'create'])->name('create');
Route::get('list', [UserController::class, 'list'])->name('list');
Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::get('delete/{id}', [UserController::class, 'Delete'])->name('delete');
Route::post('update/{id}', [UserController::class, 'Update'])->name('update');
