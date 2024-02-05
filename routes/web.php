<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResevationController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Models\Reservation;
use App\Models\Role;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin', DashboardController::class);
    Route::resource('users', UserController::class);
    
    Route::resource('books', BookController::class);
    Route::resource('reservations', ResevationController::class);
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::resource('home', ResevationController::class);
    // Route::resource('books', BookController::class);
});

require __DIR__.'/auth.php';



// Route::get('/test/index', [TestController::class, 'index']);
// Route::get('/test/show/{test}', [TestController::class, 'show']);
// Route::get('/test/create', [TestController::class, 'create']);
// Route::post('/test/store', [TestController::class, 'store']);
// Route::get('/test/edit/{test}', [TestController::class, 'edit']);
// Route::put('/test/edit/{test}', [TestController::class, 'update']);
// Route::delete('/test/destroy/{test}', [TestController::class, 'destroy']);




// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('admin', [UserController::class, 'index'])->name('admin.adminDash');
// });

// Route::middleware('admin')->group(function () {
//     Route::controller('admin/books', [BookController::class]);
// });

// Route::middleware('admin')->group(function(){
//     Route::controller('admin/reservations', [ResevationController::class]);
// });
