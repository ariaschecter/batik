<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\ProfileController;
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
    return view('index');
});

Route::controller(CityController::class)->group(function () {
    Route::get('/city', 'index')->name('city.index');
    Route::get('/city/add', 'create')->name('city.add');
    Route::post('/city/add', 'store')->name('city.store');
    Route::get('/city/edit/{city}', 'edit')->name('city.edit');
    Route::post('/city/edit/{city}', 'update')->name('city.update');
    Route::get('/city/delete/{city}', 'destroy')->name('city.delete');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
