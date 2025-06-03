<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Databasecontroller;
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

/*ユーザー*/
Route::get('/', function () {
    return view('home');
});

Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/about',[HomeController::class, 'about_route'])->name('about');
Route::get('/cours', [HomeController::class, 'cours_route'])->name('cours');


/*管理画面*/
Route::get('/master', function () {
    return view('master');
});
Route::get('/kanri', [HomeController::class, 'kanri_route'])->name('kanri');





