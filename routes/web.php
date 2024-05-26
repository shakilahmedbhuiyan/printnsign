<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

/**
 * Admin Routes
 */
Route::group([
    'middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified'],
    'prefix' => 'dashboard',
    'as' => 'admin.',
], static function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

});

// /**
//  * User Routes
//  */
// Route::group([
//     'middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified'],
//     'prefix' => 'user',
//     'as' => 'user.',
// ], static function () {
//     Route::get('/profile', \App\Livewire\User\Profile\Show::class)->name('profile.show');

// });

