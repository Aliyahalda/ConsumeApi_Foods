<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

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
    return view('foods.dashborad');
});

Route::get('/dashboard', [FoodController::class, 'dashboard']);
Route::get('/foods', [FoodController::class, 'index']);
Route::get('/foods/create', [FoodController::class, 'create']);
Route::post('/foods/store', [FoodController::class, 'store']);
Route::get('/foods/{id}', [FoodController::class, 'show']);
Route::get('/foods/edit/{id}', [FoodController::class, 'edit']);
Route::patch('/foods/update/{id}', [FoodController::class, 'update']);
Route::delete('/foods/delete/{id}', [FoodController::class, 'destroy']);










