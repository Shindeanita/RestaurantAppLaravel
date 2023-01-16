<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;

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
//     return view('welcome');
// });

/* Start - route for CRUD operation  */

Route::get('/',[RestoController::class,'index']);
//Route::view('home','home');
Route::get('/list',[RestoController::class,'list']);
Route::view('add','add');
Route::post('/add',[RestoController::class,'store']);

Route::get('edit/{id}',[RestoController::class,'edit']);
Route::post('update',[RestoController::class,'updatedata']);
Route::get('delete/{id}',[RestoController::class,'delete']);

// End route




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
