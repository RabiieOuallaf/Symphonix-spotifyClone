<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\User;
use app\Http\Controllers\Bands;
use app\Http\Controllers\Musics;
use app\Http\Controllers\Clients;
use app\Http\Controllers\Artists;


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
// Register routing 
Route::get('/register' , [Users::class , 'RegisterPage']);
Route::post('/register/authentication', [User::class], 'storeUserData');

// Login routing 

Route::get('/login', [Users::class, 'loginPage']);
Route::post('/login/authentication', [Users::class, 'credentialsVerification']);

// logout route
Route::get('/logout', [Users::class, 'logout']);