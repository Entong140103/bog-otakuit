<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('dashboard.data');
// });
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/view', function () {
    return view('dashboard.view');
});

Route::get('/',[PostController::class,'index']);
Route::get('/login',[AuthController::class,'login']);
