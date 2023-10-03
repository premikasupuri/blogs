<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

require __DIR__.'/auth.php';


Route::get('/index', [BlogController::class, 'index']);
Route::get('/create', [BlogController::class, 'create']);
Route::post('/store', [BlogController::class, 'store']);
Route::get('/show/{id}', [BlogController::class, 'show']);
Route::get('/update/{id}', [BlogController::class, 'update']);
Route::post('/save/{id}', [BlogController::class, 'save']);
Route::post('/destroy/{id}', [BlogController::class, 'destroy']);


// Route::controller(BlogController::class)->group(function () {
//     Route::get('blogs', 'index')->name('index');
//     Route::get('blogs', 'create');
//     Route::post('blogs', 'store');
//     Route::get('blogs/{id}', 'show');
//     Route::put('blogs/{id}', 'update');
//     Route::delete('blogs/{id}', 'destroy');
//     });