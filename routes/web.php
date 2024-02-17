<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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

Route::get('/', [TodoController::class, 'index'])
    ->name('todo.index');

Route::post('/create', [TodoController::class, 'create'])
    ->name('todo.create');

Route::delete('/destroy/{todo}', [TodoController::class, 'destroy'])
    ->name('todo.destroy');

Route::get('/edit/{todo}', [TodoController::class, 'edit'])
    ->name('todo.edit');
Route::patch('/edit/{todo}/update', [TodoController::class, 'update'])
    ->name('todo.update');
