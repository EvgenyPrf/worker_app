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

Route::get('animals', [\App\Http\Controllers\AnimalController::class, 'index']);
Route::get('animals/show', [\App\Http\Controllers\AnimalController::class, 'show']);
Route::get('animals/create', [\App\Http\Controllers\AnimalController::class, 'create']);
Route::get('animals/update', [\App\Http\Controllers\AnimalController::class, 'update']);
Route::get('animals/delete', [\App\Http\Controllers\AnimalController::class, 'delete']);



Route::get('cars', [\App\Http\Controllers\CarController::class, 'index']);
Route::get('cars/show', [\App\Http\Controllers\CarController::class, 'show']);
Route::get('cars/create', [\App\Http\Controllers\CarController::class, 'create']);
Route::get('cars/update', [\App\Http\Controllers\CarController::class, 'update']);
Route::get('cars/delete', [\App\Http\Controllers\CarController::class, 'delete']);


Route::get('cities', [\App\Http\Controllers\CityController::class, 'index']);
Route::get('cities/show', [\App\Http\Controllers\CityController::class, 'show']);
Route::get('cities/create', [\App\Http\Controllers\CityController::class, 'create']);
Route::get('cities/update', [\App\Http\Controllers\CityController::class, 'update']);
Route::get('cities/delete', [\App\Http\Controllers\CityController::class, 'delete']);


Route::get('clients', [\App\Http\Controllers\ClientController::class, 'index']);
Route::get('clients/show', [\App\Http\Controllers\ClientController::class, 'show']);
Route::get('clients/create', [\App\Http\Controllers\ClientController::class, 'create']);
Route::get('clients/update', [\App\Http\Controllers\ClientController::class, 'update']);
Route::get('clients/delete', [\App\Http\Controllers\ClientController::class, 'delete']);


Route::get('computers', [\App\Http\Controllers\ComputerController::class, 'index']);
Route::get('computers/show', [\App\Http\Controllers\ComputerController::class, 'show']);
Route::get('computers/create', [\App\Http\Controllers\ComputerController::class, 'create']);
Route::get('computers/update', [\App\Http\Controllers\ComputerController::class, 'update']);
Route::get('computers/delete', [\App\Http\Controllers\ComputerController::class, 'delete']);


Route::get('flowers', [\App\Http\Controllers\FlowerController::class, 'index']);
Route::get('flowers/show', [\App\Http\Controllers\FlowerController::class, 'show']);
Route::get('flowers/create', [\App\Http\Controllers\FlowerController::class, 'create']);
Route::get('flowers/update', [\App\Http\Controllers\FlowerController::class, 'update']);
Route::get('flowers/delete', [\App\Http\Controllers\FlowerController::class, 'delete']);


Route::get('hobbies', [\App\Http\Controllers\HobbyController::class, 'index']);
Route::get('hobbies/show', [\App\Http\Controllers\HobbyController::class, 'show']);
Route::get('hobbies/create', [\App\Http\Controllers\HobbyController::class, 'create']);
Route::get('hobbies/update', [\App\Http\Controllers\HobbyController::class, 'update']);
Route::get('hobbies/delete', [\App\Http\Controllers\HobbyController::class, 'delete']);


Route::get('students', [\App\Http\Controllers\StudentController::class, 'index']);
Route::get('students/show', [\App\Http\Controllers\StudentController::class, 'show']);
Route::get('students/create', [\App\Http\Controllers\StudentController::class, 'create']);
Route::get('students/update', [\App\Http\Controllers\StudentController::class, 'update']);
Route::get('students/delete', [\App\Http\Controllers\StudentController::class, 'delete']);


