<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::match(['get', 'post'], '/', [StatusController::class,'index'])->name('home');
Route::get('/statusf/{id}',[StatusController::class,'statusfalse'])->name('statusf');
Route::get('/statust/{id}',[StatusController::class,'statustrue'])->name('statust');