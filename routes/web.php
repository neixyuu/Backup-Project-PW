<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypeModelController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::resource('/home',HomeController::class);
    Route::resource('manufacture',ManufactureController::class);
    Route::resource('typemodel',TypeModelController::class);
    Route::resource('car',CarController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('admin', [AdminController::class, 'index'])->middleware(['auth', 'verified', 'checkRole:A'])->name('admin');

// Route::get('user', [UserController::class, 'index'])->middleware(['auth', 'verified', 'checkRole:U'])->name('user');
Route::middleware(['auth', 'checkRole:A'])->group(function(){
    Route::resource('/admin', AdminController::class);
});

Route::middleware(['auth', 'checkRole:U'])->group(function(){
    Route::resource('/user', UserController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
