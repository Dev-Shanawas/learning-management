<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\Password;

use App\Http\Controllers\UserController ;
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
    return view('dashboard');
});



Route::get('/login', function () {
    return view('auth.login');
});



Route::get('/register', function () {
    return view('auth.register');
});


Route::post('/register', [UserController::Class, 'register']);

Route::post('/login', [UserController::Class, 'login']);
