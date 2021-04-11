<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/empresas/store', [CompaniesController::class, 'store'])->name('empresas.store');
Route::get('/empresas/show/{id}', [CompaniesController::class, 'show'])->name('empresas.show');
Route::get('/', [CompaniesController::class, 'home'])->name('empresas.home');
Route::get('/empresas/all', [CompaniesController::class, 'index'])->name('empresas.index');
Route::any('/empresas/search', [CompaniesController::class, 'search'])->name('empresas.search');
Route::post('/register/save', [UserController::class, 'registerSave'])->name('empresas.save');
Route::post('/login/auth', [UserController::class, 'auth'])->name('empresas.auth');
Route::get('/logout', [UserController::class, 'logout'])->name('empresas.logout');

Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/login', [UserController::class, 'login'])->name('empresas.login');
    Route::get('/register', [UserController::class, 'register'])->name('empresas.register');
    Route::get('/empresas/create', [CompaniesController::class, 'create'])->name('empresas.create');
});


