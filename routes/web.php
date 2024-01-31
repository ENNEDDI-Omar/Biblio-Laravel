<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
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

require __DIR__.'/auth.php';



Route::get('/test/index', [TestController::class, 'index']);
Route::get('/test/show/{test}', [TestController::class, 'show']);
Route::get('/test/create', [TestController::class, 'create']);
Route::post('/test/store', [TestController::class, 'store']);
Route::get('/test/edit/{test}', [TestController::class, 'edit']);
Route::put('/test/edit/{test}', [TestController::class, 'update']);
Route::delete('/test/destroy/{test}', [TestController::class, 'destroy']);




Route::middleware('admin')->group(function () {
    Route::controller('/test', [TestController::class]);

});