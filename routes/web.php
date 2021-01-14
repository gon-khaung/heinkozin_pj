<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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
    return view('frontend.index');
});
Route::get('/cart', [FrontendController::class, 'cart']);
Route::get('/form', [FrontendController::class, 'form']);
Route::get('/home', [FrontendController::class, 'home']);
Route::get('/feedback', [FrontendController::class, 'feedback']);


