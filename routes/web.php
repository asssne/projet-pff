<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\reservationController;
use App\Http\Controllers\biensImmeubiliersController;

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
    return view('accueil');
});
Route::get('/accueil', function () {
    return view('accueil');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [ListeController::class, 'index'])->name('userss')->middleware('auth');
Route::get('/delete/{id}', [userController::class, 'delet'])->name('delet');
// Route::get('/show-data/{id}', [userController::class, 'show'])->name('data.show');

// les routes pour gerer les biensImmeubiliers
Route::get('/meuble', [biensImmeubiliersController::class, 'index'])->name('meuble');
Route::get('/ajouter', [biensImmeubiliersController::class, 'create'])->name('ajouter');
Route::post('/ajouter', [biensImmeubiliersController::class, 'store'])->name('store');
Route::get('/delete-biens_immeubiliers/{id}', [biensImmeubiliersController::class, 'delete'])->name('delete');
Route::get('/show-biens_immeubiliers/{id}', [biensImmeubiliersController::class, 'show'])->name('show');
Route::get('/edit/{id}', [biensImmeubiliersController::class, 'edit'])->name('edit');
 Route::put('/update/{id}', [biensImmeubiliersController::class, 'update'])->name('update');
 Route::get('/nos_services', [biensImmeubiliersController::class, 'affichesss'])->name('affichesss');

Route::get('/reserve', [reservationController::class, 'index'])->name('reserve');

Route::middleware(['auth', 'profil:admin'])->group(function () {
    // Vos routes ici
Route::get('/users', [UserController::class, 'index'])->name('users');
  
});
  Route::middleware(['auth', 'profil:client'])->group(function () {
   // Vos routes ici
   return view('accueil');
        
    });