<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,"index"])->name('home');

Route::prefix('/todo')->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('todo');
    Route::post('/store', [TodoController::class, 'store'])->name('todo.store');
    Route::get('/{task_id}/delete', [TodoController::class, 'delete'])->name('todo.delete');
    Route::get('/{task_id}/done', [TodoController::class, 'done'])->name('todo.done');
});

