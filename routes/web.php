<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/en');
});

Route::get('/{locale}', [PageController::class, 'index'])
    ->whereIn('locale', config('locales.available'))
    ->middleware('setlocale');
