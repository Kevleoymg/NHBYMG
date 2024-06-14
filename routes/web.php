<?php

use App\Http\Controllers\ListingsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('listings', ListingsController::class);

    //2222 aun no estoy seguro que esto este ejecutandose pero no ha crasheado nada aun
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard2', function () {
        return view('dashboard2');
    })->name('dashboard2');
    
    Route::middleware(['auth:sanctum', 'verified'])->get('/page1', function () {
        return view('page1');
    })->name('page1');
    
    Route::middleware(['auth:sanctum', 'verified'])->get('/page2', function () {
        return view('page2');
    })->name('page2');


});
