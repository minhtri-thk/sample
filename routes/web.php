<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::post('login', [AuthenticationController::class, 'store']);

Route::get('/register', function () {
    return view('auth.register');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticationController::class, 'destroy'])->name('logout');

    Route::get('/', function () {
        return view('sample');
    });

    Route::get('/dashboard', function () {
        return 123;
    })->name('dashboard');

    // profile routes
    Route::get('/profile', function () {
        return view('pages.profile');
    })->name('profile');

    Route::get('/profile/edit', function () {
        return view('pages.edit-profile');
    })->name('profile.edit');

    Route::group([
        'controller' => SampleController::class,
        'prefix' => 'sample',
        'as' => 'sample.',
    ], function () {
        Route::get('/', 'index')->name('index');
    });
});
