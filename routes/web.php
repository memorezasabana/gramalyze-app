<?php

use App\Http\Controllers\HashtagController;
use App\Http\Controllers\HeadlineController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/analyze-profile', [ProfileController::class, 'showAnalyzePage'])->name('analyze.profile');
Route::get('/analyze-hastag', [HashtagController::class, 'showAnalyzePage'])->name('analyze.hastag');
Route::get('/analyze-headline', [HeadlineController::class, 'showAnalyzePage'])->name('analyze.headline');

