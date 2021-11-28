<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CoverLetterController;

require __DIR__.'/auth.php';

Route::get('/', [CvController::class, "index"])->middleware("auth");

Route::get('/coverletter', [CoverLetterController::class, "index"])
    ->middleware("auth");

Route::get('/about', [AboutController::class, "index"])
    ->middleware("auth");

