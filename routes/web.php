<?php

use App\Http\Controllers\BatikController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
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

Route::controller(CategoryController::class)->group(function () {
    Route::get('/city/{city:city_slug}', 'index')->name('category.index');
    Route::get('/city/{city:city_slug}/add', 'create')->name('category.add');
    Route::post('/city/{city:city_slug}/add', 'store')->name('category.store');
    Route::get('/city/{city:city_slug}/edit/{category}', 'edit')->name('category.edit');
    Route::post('/city/{city:city_slug}/edit/{category}', 'update')->name('category.update');
    Route::get('/city/{city:city_slug}/delete/{category}', 'destroy')->name('category.delete');
});

Route::controller(SubCategoryController::class)->group(function () {
    Route::get('/category/{category:category_slug}', 'index')->name('sub.category.index');
    Route::get('/category/{category:category_slug}/add', 'create')->name('sub.category.add');
    Route::post('/category/{category:category_slug}/add', 'store')->name('sub.category.store');
    Route::get('/category/{category:category_slug}/edit/{subcategory}', 'edit')->name('sub.category.edit');
    Route::post('/category/{category:category_slug}/edit/{subcategory}', 'update')->name('sub.category.update');
    Route::get('/category/{category:category_slug}/delete/{subcategory}', 'destroy')->name('sub.category.delete');
});

Route::controller(BatikController::class)->group(function () {
    Route::get('/category/{category:category_slug}/add-batik', 'create')->name('batik.add');
    Route::post('/api/fetch-sub-category', 'fetch_sub_category');
    Route::post('/category/{category:category_slug}/add-batik', 'store')->name('batik.store');
    Route::get('/category/{category:category_slug}/edit-batik/{batik}', 'edit')->name('batik.edit');
    // Route::post('/category/{category:category_slug}/edit-batik/{batik}', 'update')->name('batik.update');
    // Route::get('/category/{category:category_slug}/delete-batik/{batik}', 'destroy')->name('batik.delete');
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
