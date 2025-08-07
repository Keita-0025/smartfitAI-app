<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /**
     * weekly-menu(週間メニュー表示)
     */
    Route::get('/weekly-menu', function () {
        return view('weekly-menu');
    })->name('weekly-menu');

    /**
     * training-edit(トレーニング)
     */
    Route::get('/training', function () {
        return view('training-edit');
    })->name('training');

    /**
     * ai-trainer(AIトレーナー)
     */
    Route::get('/ai-trainer', function () {
        return view('ai-trainer');
    })->name('ai-trainer');
});

require __DIR__ . '/auth.php';
