<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard/template')->name('dashboard.template.')->group(function () {
    /* Template dashboard routes */
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('', fn () => view('pages.dashboard.template.dashboard'))->name('index');
    });
    //Route::get('', fn () => view('pages.dashboard.template.dashboard'))->name('dashboard');

    /* Account settings */
    Route::prefix('settings/accounts')->name('settings.accounts.')->group(function () {
        Route::get('', fn () => view('pages.dashboard.template.account-settings.account'))->name('index');
        Route::get('notifications', fn () => view('pages.dashboard.template.account-settings.notification'))->name('notifications');
        Route::get('connections', fn () => view('pages.dashboard.template.account-settings.connection'))->name('connections');
    });
});
