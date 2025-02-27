<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DepenseController;


use Illuminate\Support\Facades\Route;
Route::get('/categorie', [CategorieController::class, 'index'])->name('categorie');
Route::post('/categorie', [CategorieController::class, 'store'])->name('store.categorie');
Route::get('/categorie', [CategorieController::class, 'showCategories'])->name('show.categorie');
Route::delete('/categorie/{categorieid}', [CategorieController::class, 'destroy'])->name('destroy.categorie');
Route::get('/update/{editid}', [CategorieController::class, 'edit'])->name('edit.categorie');
Route::put('/update/{updateid}', [CategorieController::class, 'update'])->name('update.categorie');


Route::get('/ajouter', [DepenseController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/update', function () {
    return view('update');
});
// Route::get('/ajoute', function () {
//     return view('ajouter');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
