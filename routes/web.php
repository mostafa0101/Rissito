<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\TableController;
use App\Http\Controllers\admin\ReservationController;

use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\Frontend\WelcomeController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function () {

    Route::get('/',[AdminController::class,'index'])->name('index');

    Route::resource('/categories', CategoryController::class);
    Route::resource('/menu', MenuController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);
});

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/categories', [FrontendCategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [FrontendCategoryController::class, 'show'])->name('categories.show');

Route::get('/menus', [FrontendMenuController::class, 'index'])->name('menus.index');

Route::get('/reservations/step-one',[FrontendReservationController::class,'step_one'])->name('reservations.step.one');
Route::post('/reservations/step-one', [FrontendReservationController::class, 'StoreStepOne'])->name('reservations.store.step.one');
Route::get('/reservations/step-two', [FrontendReservationController::class, 'step_two'])->name('reservations.step.two');
Route::post('/reservations/step-two', [FrontendReservationController::class, 'StoreStepTwo'])->name('reservations.store.step.two');

Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');


require __DIR__.'/auth.php';
