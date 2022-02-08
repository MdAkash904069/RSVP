<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::match(['get','post'], '/login',[PageController::class, 'login'])->name('login');


Route::group(['middleware' => 'auth'], function () {

    Route::match(['get'], '/profile',[PageController::class, 'profile'])->name('profile');
    Route::match(['post'], '/profile-post',[PageController::class, 'profile_post'])->name('profile_post');
    Route::match(['get'], '/logout',[PageController::class, 'logout'])->name('logout');
    Route::match(['get'], '/dashboard',[PageController::class, 'dashboard'])->name('dashboard');
    
    
});

