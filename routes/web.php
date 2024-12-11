<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\halController;

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

Route::get('/home', [HomeController::class,'home'])->name('home');
Route::get('/about', [AboutController::class,'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');

Route::get('/home1', [halController::class, 'home1'])->name('topmenu1_blade');
Route::get('/about1', [halController::class, 'about1'])->name('topmenu2_blade');
Route::get('/contact1', [halController::class, 'contact1'])->name('topmenu3_blade');

Route::resource('biodatas', BiodataController::class);