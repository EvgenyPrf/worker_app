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

Route::get('animals', [\App\Http\Controllers\AnimalController::class, 'index'])->name('animal.index');
Route::get('animals/create', [\App\Http\Controllers\AnimalController::class, 'create'])->name('animal.create');
Route::get('animals/show/{animal}', [\App\Http\Controllers\AnimalController::class, 'show'])->name('animal.show');
Route::post('animals', [\App\Http\Controllers\AnimalController::class, 'store'])->name('animal.store');
Route::get('animals/{animal}/edit', [\App\Http\Controllers\AnimalController::class, 'edit'])->name('animal.edit');
Route::patch('animals/{animal}', [\App\Http\Controllers\AnimalController::class, 'update'])->name('animal.update');
Route::delete('animals/{animal}', [\App\Http\Controllers\AnimalController::class, 'delete'])->name('animal.delete');



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


Route::get('clients', [\App\Http\Controllers\ClientController::class, 'index'])->name('client.index');
Route::get('clients/create', [\App\Http\Controllers\ClientController::class, 'create'])->name('client.create');
Route::get('clients/show/{client}', [\App\Http\Controllers\ClientController::class, 'show'])->name('client.show');
Route::post('clients', [\App\Http\Controllers\ClientController::class, 'store'])->name('client.store');
Route::get('clients/{client}/edit', [\App\Http\Controllers\ClientController::class, 'edit'])->name('client.edit');
Route::patch('clients/{client}', [\App\Http\Controllers\ClientController::class, 'update'])->name('client.update');
Route::delete('clients/{client}', [\App\Http\Controllers\ClientController::class, 'delete'])->name('client.delete');


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


Route::get('students', [\App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
Route::get('students/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
Route::get('students/show/{student}', [\App\Http\Controllers\StudentController::class, 'show'])->name('student.show');
Route::post('students', [\App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::get('students/edit', [\App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');
Route::patch('students/{student}', [\App\Http\Controllers\StudentController::class, 'update'])->name('student.update');
Route::delete('students/{student}', [\App\Http\Controllers\StudentController::class, 'delete'])->name('student.delete');

