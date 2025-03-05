<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.home.index');
// });
Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'profile'])->name('dashboard');
    Route::get('/account', [DashboardController::class, 'account'])->name('account');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/upload-photo', [ProfileController::class, 'upload']);
    Route::get('/get-photos', [ProfileController::class, 'getPhotos']);
    Route::delete('/delete-photo/{id}', [ProfileController::class, 'deletePhoto']);
    Route::post('/update-name', [HomeController::class, 'updateName'])->name('update.name');
    Route::post('/update-password', [HomeController::class, 'updatePassword'])->name('update.password');
});

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
})->name('logout');
