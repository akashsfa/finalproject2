<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeleveryMan;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
 //   return $request->user();
//});



Route::get('/oder',[DeleveryMan::class,'OderList']);
Route::post('/OderListConfirm',[DeleveryMan::class,'OderListConfirm']);
Route::get('/registration',[DeleveryMan::class,'Registration'])->name('registration');
Route::post('/registration/submit',[DeleveryMan::class,'RegistrationSubmit'])->name('registration.submit');
Route::post('/loginSubmit',[DeleveryMan::class,'loginSubmit'])->name('loginSubmit');

