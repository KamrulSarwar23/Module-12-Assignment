<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BuyTicketController;

require __DIR__ . '/auth.php';
Route::get('/', [BuyTicketController::class, 'loginPage'])->name('home.page');

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/ticket/buy', [BuyTicketController::class, 'buyTicket'])->name('ticket.buy');
    Route::get('user/dashboard', [BuyTicketController::class, 'homePage'])->name('user.dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    // Dashboard Route
    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

    // Trip Routes
    Route::get('/trips', [AdminController::class, 'index'])->name('trips.index');
    Route::delete('/trips/{id}', [AdminController::class, 'destroy'])->name('trips.destroy');
    Route::get('/trips/create', [AdminController::class, 'create'])->name('trips.create');
    Route::post('/trips/store', [AdminController::class, 'store'])->name('trips.store');
    Route::get('/trips/store/{id}', [AdminController::class, 'edit'])->name('trips.edit');
    Route::post('/trips/store/{id}', [AdminController::class, 'update'])->name('trips.update');
    // Location Route

    Route::get('/location', [LocationController::class, 'index'])->name('location.index');
    Route::get('/location/create', [LocationController::class, 'create'])->name('location.create');
    Route::post('/location/store', [LocationController::class, 'store'])->name('location.store');
    Route::get('/location/edit/{id}', [LocationController::class, 'edit'])->name('location.edit');
    Route::post('/location/update/{id}', [LocationController::class, 'update'])->name('location.update');
    Route::delete('/location/destroy/{id}', [LocationController::class, 'destroy'])->name('location.destroy');
});
