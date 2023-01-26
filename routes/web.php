<?php

use App\Http\Controllers\BatikController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeBatikController;
use App\Http\Controllers\HomeCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeSubCategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubCategoryController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('frontend.index');
    Route::get('/city', 'city_index')->name('frontend.city.index');
    Route::get('/city/{city:city_slug}', 'city_show')->name('frontend.city.show');
    Route::get('/city/timeline/{city:city_slug}', 'city_show_timeline')->name('frontend.timeline.show');
    Route::get('/category/{category:category_slug}', 'category_index')->name('frontend.category.index');
    Route::get('/subcategory/{subcategory:sub_slug}', 'subcategory_index')->name('frontend.subcategory.index');
    Route::get('/batik', 'batik_index')->name('frontend.batik.index');
    Route::get('/batik/{batik:batik_slug}', 'batik_show')->name('frontend.batik.show');
});

Route::middleware('guest')->controller(UserController::class)->group(function () {
    Route::get('/admin/login', 'login_view')->name('admin.login');
    Route::post('/admin/login', 'login_store')->name('admin.login.store');
});

Route::middleware('auth')->prefix('admin')->group(function () {
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
        Route::post('/api/fetch-category', 'fetch_category');
        Route::post('/api/fetch-sub-category', 'fetch_sub_category');
        Route::post('/category/{category:category_slug}/add-batik', 'store')->name('batik.store');
        Route::get('/category/{category:category_slug}/edit-batik/{batik}', 'edit')->name('batik.edit');
        Route::post('/category/{category:category_slug}/edit-batik/{batik}', 'update')->name('batik.update');
        Route::get('/category/{category:category_slug}/delete-batik/{batik}', 'destroy')->name('batik.delete');
    });

    Route::controller(HomeCategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('home.category.index');
        Route::get('/category/add/new', 'create')->name('home.category.add');
        Route::post('/category/add/new', 'store')->name('home.category.store');
        Route::get('/category/edit/{category}', 'edit')->name('home.category.edit');
        Route::post('/category/edit/{category}', 'update')->name('home.category.update');
        Route::get('/category/delete/{category}', 'destroy')->name('home.category.delete');
    });

    Route::controller(HomeSubCategoryController::class)->group(function () {
        Route::get('/subcategory', 'index')->name('home.subcategory.index');
        Route::get('/subcategory/add', 'create')->name('home.subcategory.add');
        Route::post('/subcategory/add', 'store')->name('home.subcategory.store');
        Route::get('/subcategory/edit/{subcategory}', 'edit')->name('home.subcategory.edit');
        Route::post('/subcategory/edit/{subcategory}', 'update')->name('home.subcategory.update');
        Route::get('/subcategory/delete/{subcategory}', 'destroy')->name('home.subcategory.delete');
    });

    Route::controller(HomeBatikController::class)->group(function () {
        Route::get('/batik', 'index')->name('home.batik.index');
        Route::get('/batik/add', 'create')->name('home.batik.add');
        Route::post('/batik/add', 'store')->name('home.batik.store');
        Route::get('/batik/edit/{batik}', 'edit')->name('home.batik.edit');
        Route::post('/batik/edit/{batik}', 'update')->name('home.batik.update');
        Route::get('/batik/delete/{batik}', 'destroy')->name('home.batik.delete');
    });

    Route::controller(SettingController::class)->group(function () {
        Route::get('/setting', 'index')->name('home.setting.index');
        Route::post('/setting/{setting}', 'store')->name('home.setting.store');
    });


    Route::controller(UserController::class)->group(function () {
        Route::get('home/user', 'index')->name('home.user.index');
        Route::get('home/user/add', 'create')->name('home.user.add');
        Route::post('home/user/add', 'store')->name('home.user.store');
        Route::get('home/user/edit/{user}', 'edit')->name('home.user.edit');
        Route::post('home/user/edit/{user}', 'update')->name('home.user.update');
        Route::get('home/user/delete/{user}', 'destroy')->name('home.user.delete');

        Route::get('admin/logout', 'logout')->name('logout');
    });

});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin.dashboard');

// require __DIR__.'/auth.php';
