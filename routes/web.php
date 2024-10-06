<?php

use App\Http\Controllers\addcommentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\showcomment;
use App\Http\Controllers\TakeController;
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
})->middleware('auth');
Route::resource('/task',TakeController::class)->middleware(['auth']);
Route::get('/tasks/{id}',[TakeController::class,'createcomment'])->name('task.comment');
Route::post('/addcomment',addcommentsController::class)->name('addcomment');
Route::get('/showComment',[showcomment::class,'showcomment'])->name('showC');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
