<?php

use App\Http\Controllers\BatikController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeBatikController;
use App\Http\Controllers\HomeCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeSubCategoryController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('frontend.index');
    Route::get('/city', 'city_index')->name('frontend.city.index');
    Route::get('/city/{city:city_slug}', 'city_show')->name('frontend.city.show');
    Route::get('/city/timeline/{city:city_slug}', 'city_show_timeline')->name('frontend.timeline.show');
    Route::get('/category/{category:category_slug}', 'category_index')->name('frontend.category.index');
    Route::get('/subcategory/{subcategory:sub_slug}', 'subcategory_index')->name('frontend.subcategory.index');
});

Route::controller(CityController::class)->group(function () {
    Route::get('home/city', 'index')->name('city.index');
    Route::get('home/city/add', 'create')->name('city.add');
    Route::post('home/city/add', 'store')->name('city.store');
    Route::get('home/city/edit/{city}', 'edit')->name('city.edit');
    Route::post('home/city/edit/{city}', 'update')->name('city.update');
    Route::get('home/city/delete/{city}', 'destroy')->name('city.delete');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/home/city/{city:city_slug}', 'index')->name('category.index');
    Route::get('/home/city/{city:city_slug}/add', 'create')->name('category.add');
    Route::post('/home/city/{city:city_slug}/add', 'store')->name('category.store');
    Route::get('/home/city/{city:city_slug}/edit/{category}', 'edit')->name('category.edit');
    Route::post('/home/city/{city:city_slug}/edit/{category}', 'update')->name('category.update');
    Route::get('/home/city/{city:city_slug}/delete/{category}', 'destroy')->name('category.delete');
});

Route::controller(SubCategoryController::class)->group(function () {
    Route::get('/home/category/{category:category_slug}', 'index')->name('sub.category.index');
    Route::get('/home/category/{category:category_slug}/add', 'create')->name('sub.category.add');
    Route::post('/home/category/{category:category_slug}/add', 'store')->name('sub.category.store');
    Route::get('/home/category/{category:category_slug}/edit/{subcategory}', 'edit')->name('sub.category.edit');
    Route::post('/home/category/{category:category_slug}/edit/{subcategory}', 'update')->name('sub.category.update');
    Route::get('/home/category/{category:category_slug}/delete/{subcategory}', 'destroy')->name('sub.category.delete');
});

Route::controller(BatikController::class)->group(function () {
    Route::get('/home/category/{category:category_slug}/add-batik', 'create')->name('batik.add');
    Route::post('/api/fetch-category', 'fetch_category');
    Route::post('/api/fetch-sub-category', 'fetch_sub_category');
    Route::post('/home/category/{category:category_slug}/add-batik', 'store')->name('batik.store');
    Route::get('/home/category/{category:category_slug}/edit-batik/{batik}', 'edit')->name('batik.edit');
    Route::post('/home/category/{category:category_slug}/edit-batik/{batik}', 'update')->name('batik.update');
    Route::get('/home/category/{category:category_slug}/delete-batik/{batik}', 'destroy')->name('batik.delete');
});

Route::controller(HomeCategoryController::class)->group(function () {
    Route::get('/home/category', 'index')->name('home.category.index');
    Route::get('/home/category/add', 'create')->name('home.category.add');
    Route::post('/home/category/add', 'store')->name('home.category.store');
    Route::get('/home/category/edit/{category}', 'edit')->name('home.category.edit');
    Route::post('/home/category/edit/{category}', 'update')->name('home.category.update');
    Route::get('/home/category/delete/{category}', 'destroy')->name('home.category.delete');
});

Route::controller(HomeSubCategoryController::class)->group(function () {
    Route::get('/home/subcategory', 'index')->name('home.subcategory.index');
    Route::get('/home/subcategory/add', 'create')->name('home.subcategory.add');
    Route::post('/home/subcategory/add', 'store')->name('home.subcategory.store');
    Route::get('/home/subcategory/edit/{subcategory}', 'edit')->name('home.subcategory.edit');
    Route::post('/home/subcategory/edit/{subcategory}', 'update')->name('home.subcategory.update');
    Route::get('/home/subcategory/delete/{subcategory}', 'destroy')->name('home.subcategory.delete');
});

Route::controller(HomeBatikController::class)->group(function () {
    Route::get('/home/batik', 'index')->name('home.batik.index');
    Route::get('/home/batik/add', 'create')->name('home.batik.add');
    Route::post('/home/batik/add', 'store')->name('home.batik.store');
    Route::get('/home/batik/edit/{batik}', 'edit')->name('home.batik.edit');
    Route::post('/home/batik/edit/{batik}', 'update')->name('home.batik.update');
    Route::get('/home/batik/delete/{batik}', 'destroy')->name('home.batik.delete');
});


Route::get('/home/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
