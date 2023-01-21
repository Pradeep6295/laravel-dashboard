<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tp\ProjectController;

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
});

Auth::routes();

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('users/{id}', function ($id) {
    
});
Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->name('profile');;
    Route::put('/profile', 'update')->name('profile.update');
});
Route::controller(ProjectController::class)->group(function () {
    Route::get('/add-project', 'index')->name('add.p');;
    Route::get('/add-project', 'ProjectStore')->name('add.project');
    Route::put('/affilation-accreditation', 'update')->name('profile.update');
});