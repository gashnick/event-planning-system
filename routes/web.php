<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/show', [UserController::class, 'showUsers'])->name('show');
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login_post');
Route::get('/signup', [AuthManager::class, 'signup'])->name('signup');
Route::post('/signup', [AuthManager::class, 'signupPost'])->name('signup_post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/users/create', [UserController::class, 'create'])->name('create');
Route::post('/users/create', [UserController::class, 'store'])->name('store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('edit');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('delete');

