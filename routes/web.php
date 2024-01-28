<?php

use App\Http\Controllers\Admin\CompaniesController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\LiklihoodsController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductCatsController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\ProfilesController;
use App\Http\Controllers\Admin\StatusesController;
use App\Http\Controllers\Admin\UserProfilesController;
use App\Http\Controllers\Admin\UserRolesController;
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
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfilesController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfilesController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfilesController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/contacts', ContactsController::class);
    Route::resource('/companies', CompaniesController::class);
    Route::resource('/liklihoods', LiklihoodsController::class);
    Route::resource('/orders', OrdersController::class);
    Route::resource('/products', ProductsController::class);
    Route::resource('/product-cats', ProductCatsController::class);
    Route::resource('/statuses', StatusesController::class);
    Route::resource('/user-profiles', UserProfilesController::class);
    Route::resource('/user-roles', UserRolesController::class);
});

require __DIR__.'/auth.php';
