<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ExpertController;
use Illuminate\Support\Facades\Auth;

// Authentication Routes
Auth::routes();

// Public Routes
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'service'])->name('services');
Route::get('/team', [ExpertController::class, 'index'])->name('team');
Route::get('/projects', [PageController::class, 'portfolio'])->name('projects');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
Route::get('/farm-projects', [PageController::class, 'farmProjects'])->name('farm-projects');

// Legal Pages
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/cookies', [PageController::class, 'cookies'])->name('cookies');
Route::get('/single', [PageController::class, 'single'])->name('single');
Route::get('/search', [PageController::class, 'search'])->name('search');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/account', [PageController::class, 'account'])->name('account');
    Route::get('/profile-edit', [PageController::class, 'profileEdit'])->name('profile.edit');
    Route::get('/book-appointment', [PageController::class, 'bookAppointment'])->name('book.appointment');
    Route::get('/client/projects', [PageController::class, 'clientProjects'])->name('client.projects');
});
