<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/todo' , [\App\Http\Controllers\TodoController::class , 'index']) ;
Route::get('/todo/create' , [\App\Http\Controllers\TodoController::class , 'create']) ;
Route::post('/todo/store', [\App\Http\Controllers\TodoController::class , 'store']) ;
Route::get('/todo/{user}' , [\App\Http\Controllers\TodoController::class , 'show']) ;
Route::delete('/todo/{user}/delete' , [\App\Http\Controllers\TodoController::class , 'destroy']) ;
Route::get('/todo/{user}/edit' , [\App\Http\Controllers\TodoController::class , 'edit']) ;
Route::patch('/todo/{user}/update' , [\App\Http\Controllers\TodoController::class , 'update']) ;
