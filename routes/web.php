<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Guest\Index::class)->name('index');
Route::get('/{category}', App\Livewire\Guest\Index::class, 'category')->name('index.category');

/**
 * Admin Routes
 */
Route::group([
    'middleware' => ['auth:sanctum', 'auth:web', config('jetstream.auth_session'), 'verified'],
    'prefix' => 'dashboard',
    'as' => 'admin.',
], static function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['permission:role-list'])
        ->get('/roles', \App\Livewire\Dash\Admin\Roles\Index::class)->name('roles.index');
    Route::middleware(['permission:role-create'])
        ->get('/roles/create', \App\Livewire\Dash\Admin\Roles\Create::class)->name('roles.create');
    Route::middleware(['permission:role-edit'])
        ->get('/roles/{role}/update', \App\Livewire\Dash\Admin\Roles\Update::class)->name('roles.update');

    Route::middleware(['permission:user-list'])
        ->get('/users', \App\Livewire\Dash\Admin\Users\Index::class)->name('users.index');

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

