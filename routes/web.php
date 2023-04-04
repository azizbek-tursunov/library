<?php

use App\Http\Controllers\Abonement\AbonementController;
use App\Http\Controllers\Abonement\BookController;
use App\Http\Controllers\Abonement\IssueController;
use App\Http\Controllers\Abonement\ReaderController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
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
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Group
Route::group([
    'prefix' => 'admin',
    'middleware' => 'role:admin',
], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
});

// issue Group
Route::group([
    'prefix' => 'abonement',
    'as' => 'abonement.',
    'middleware' => 'role:kutubxonachi',
], function () {
    Route::get('/dashboard', [AbonementController::class, 'index'])->name('dashboard');
    Route::resource('issue', IssueController::class);
    Route::resource('reader', ReaderController::class);
    Route::resource('book', BookController::class);
});

// Hall Group
Route::group([
    'prefix' => 'hall',
    'as' => 'hall.',
    'middleware' => 'role:nazoratchi',
], function () {
    Route::get('/dashboard', [HallController::class, 'index'])->name('dashboard');
    // make a store route for hall
    Route::post('/store', [HallController::class, 'store'])->name('store');
    Route::get('stats', [HallController::class, 'stats'])->name('stats');
});

require __DIR__.'/auth.php';
