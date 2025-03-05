<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


use Illuminate\Support\Facades\Route;
Route::get('/categorie', [CategorieController::class, 'index'])->name('categorie');
Route::post('/categorie', [CategorieController::class, 'store'])->name('store.categorie');
Route::post('/ajouter', [DepenseController::class,'store'])->name('store.depense');
Route::get('/categorie', [CategorieController::class, 'showCategories'])->name('show.categorie');
Route::delete('/categorie/{categorieid}', [CategorieController::class, 'destroy'])->name('destroy.categorie');
Route::get('/update/{editid}', [CategorieController::class, 'edit'])->name('edit.categorie');
Route::put('/update/{updateid}', [CategorieController::class, 'update'])->name('update.categorie');
Route::get('/users', [AdminController::class, 'index'])->name('users.index');
Route::delete('/users/{userid}', [AdminController::class, 'destroy'])->name('users.destroy');
// Route::get('/execute-ajoute-budget', [AdminController::class, 'ajouteBudget']);
Route::get('/depenses', [DepenseController::class,'specifique'])->name('depenses');
Route::delete('/depenses/{removedid}', [DepenseController::class,'destroy'])->name('depense.destroy');

Route::get('/edit/{depenseid}', [DepenseController::class,'edit'])->name('edit.depense');

Route::put('/edit/{depenseid}', [DepenseController::class,'update'])->name('update.depense');

Route::get('/ajouter', [DepenseController::class, 'index'])->name('ajouter.index');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bordAdmin', function () {
    return view('bordAdmin');
})->name('bordAdmin');
Route::get('/update', function () {
    return view('update');
});
Route::get('/obje', function () {
    return view('goalsFormul');
});
Route::get('/bordUser', [UserController::class, 'static'])->name('bordUser');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
