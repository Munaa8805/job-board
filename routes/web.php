<?php

use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('works');
});
Route::resource('works', WorkController::class);
