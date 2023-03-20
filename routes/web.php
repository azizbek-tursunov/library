<?php

use App\Http\Controllers\Abonement\AbonementController;
use App\Http\Controllers\Abonement\ReaderController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Hall\HallController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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
});
// Admin Group
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'role:admin',
    ], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});

// Abonement Group
Route::group([
    'prefix' => 'abonement',
    'as' => 'abonement.',
    'middleware' => 'role:kutubxonachi',
    ], function () {
    Route::get('/dashboard', [AbonementController::class, 'index'])->name('dashboard');
    Route::resource('reader', ReaderController::class);
});

// Hall Group
Route::group([
    'prefix' => 'hall',
    'as' => 'hall.',
    'middleware' => 'role:kotiba',
    ] , function () {
    Route::get('/dashboard', [HallController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
