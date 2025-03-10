<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\GoalController;
use App\Http\Middleware\CheckRole;



use Illuminate\Support\Facades\Route;
// wish:

use App\Http\Controllers\EmailController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\User;

// Route::get('/send-email', [EmailController::class, 'sendEmail']);


// Route::get('/wish', [WishlistController::class, 'create'])->name('wish.create');
// Route::get('/wishlist', [WishlistController::class, 'index'])->name('wish.index');
// Route::post('/wish', [WishlistController::class, 'store'])->name('wish.store');
// Route::delete('/wishlist{id}', [WishlistController::class, 'destroy'])->name('wish.destroy');
// Route::get('/wishlist/{updateid}', [WishlistController::class, 'edit'])->name('wish.edit');
// Route::post('/wishlist/{updateid}', [WishlistController::class, 'update'])->name('wish.update');
// // 
// // goals:

// Route::post('/depenses', [GoalController::class,'store'])->name('goal.store');

// 
// Route::get('/categorie', [CategorieController::class, 'index'])->name('categorie');
// Route::post('/categorie', [CategorieController::class, 'store'])->name('store.categorie');
// Route::post('/ajouter', [DepenseController::class,'store'])->name('store.depense');
// Route::get('/categorie', [CategorieController::class, 'showCategories'])->name('show.categorie');
// Route::delete('/categorie/{categorieid}', [CategorieController::class, 'destroy'])->name('destroy.categorie');
// Route::get('/update/{editid}', [CategorieController::class, 'edit'])->name('edit.categorie');
// Route::put('/update/{updateid}', [CategorieController::class, 'update'])->name('update.categorie');
// Route::get('/users', [AdminController::class, 'index'])->name('users.index');
// Route::get('/bord', [AdminController::class, 'static'])->name('static');
// Route::delete('/users/{userid}', [AdminController::class, 'destroy'])->name('users.destroy');
// // Route::get('/execute-ajoute-budget', [AdminController::class, 'ajouteBudget']);
// Route::get('/depenses', [DepenseController::class,'specifique'])->name('depenses');
// Route::delete('/depenses/{removedid}', [DepenseController::class,'destroy'])->name('depense.destroy');

// Route::get('/edit/{depenseid}', [DepenseController::class,'edit'])->name('edit.depense');

// Route::put('/edit/{depenseid}', [DepenseController::class,'update'])->name('update.depense');

// Route::get('/ajouter', [DepenseController::class, 'index'])->name('ajouter.index');
// Route::resource('Wishlist', WishlistController::class);


Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/bordUser', [UserController::class, 'static'])->name('bordUser');
// Route::get('/bordUser', [DepenseController::class, 'analyseDepenses']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
Route::middleware([User::class])->group(function () {
    Route::post('/depenses', [GoalController::class, 'store'])->name('goal.store');
    Route::get('/wish', [WishlistController::class, 'create'])->name('wish.create');
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wish.index');
    Route::post('/wish', [WishlistController::class, 'store'])->name('wish.store');
    Route::delete('/wishlist{id}', [WishlistController::class, 'destroy'])->name('wish.destroy');
    Route::get('/wishlist/{updateid}', [WishlistController::class, 'edit'])->name('wish.edit');
    Route::post('/wishlist/{updateid}', [WishlistController::class, 'update'])->name('wish.update');
    Route::post('/depenses', [GoalController::class, 'store'])->name('goal.store');

    Route::get('/bordUser', [UserController::class, 'static'])->name('bordUser');
    Route::put('/edit/{depenseid}', [DepenseController::class, 'update'])->name('update.depense');
    Route::get('/ajouter', [DepenseController::class, 'index'])->name('ajouter.index');
    Route::get('/edit/{depenseid}', [DepenseController::class, 'edit'])->name('edit.depense');
    Route::get('/depenses', [DepenseController::class, 'specifique'])->name('depenses');
    Route::delete('/depenses/{removedid}', [DepenseController::class, 'destroy'])->name('depense.destroy');
    Route::post('/depenses', [GoalController::class, 'store'])->name('goal.store');
    // autres routes pour utilisateurs
});
Route::middleware([Admin::class])->group(function () {


    Route::get('/categorie', [CategorieController::class, 'index'])->name('categorie');
    Route::post('/categorie', [CategorieController::class, 'store'])->name('store.categorie');
    Route::post('/ajouter', [DepenseController::class, 'store'])->name('store.depense');
    Route::get('/categorie', [CategorieController::class, 'showCategories'])->name('show.categorie');
    Route::delete('/categorie/{categorieid}', [CategorieController::class, 'destroy'])->name('destroy.categorie');
    Route::get('/update/{editid}', [CategorieController::class, 'edit'])->name('edit.categorie');
    Route::put('/update/{updateid}', [CategorieController::class, 'update'])->name('update.categorie');
    Route::get('/users', [AdminController::class, 'index'])->name('users.index');
    Route::get('/bord', [AdminController::class, 'static'])->name('static');
    Route::delete('/users/{userid}', [AdminController::class, 'destroy'])->name('users.destroy');
});

require __DIR__ . '/auth.php';
