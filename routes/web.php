<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeleveryMan;
use App\Http\Controllers\AuthController;

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
Route::get('/',[DeleveryMan::class,'OderList']);
Route::get('/OderListConfirm/{id}',[DeleveryMan::class,'OderListConfirm']);
Route::get('/registration',[DeleveryMan::class,'Registration'])->name('registration');
Route::post('/registration/submit',[DeleveryMan::class,'RegistrationSubmit'])->name('registration.submit');
Route::post('/loginSubmit',[DeleveryMan::class,'loginSubmit'])->name('loginSubmit');
Route::get('/login',[DeleveryMan::class,'login_view'])->name('login');

