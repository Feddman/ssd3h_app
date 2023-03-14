<?php

use App\Http\Controllers\ProfileController;
use App\Models\MenuItem;
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

Route::get('menu', function() {
    $menuItems = MenuItem::all();
    return view('menu', [
        'menuItems' => $menuItems
    ]);
});

Route::get('/menuItems', function() {
    return view('menuItems.index');
})->middleware(['auth'])->name('menuItems.index');

Route::get('/categories', function () {
    return view('categories.index');
})->middleware(['auth'])->name('categories.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
