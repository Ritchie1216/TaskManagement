<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/',[TaskController::class,'fetchAllTasks'])->name('index');
Route::get('/create',[TaskController::class,'createTask'])->name('create');
Route :: post('/addTask',[TaskController::class,'addTask'])->name('addTask');

Route::get('/doneTask/{id}',[TaskController::class,'doneTask']) -> name('doneTask');

Route::get('/tasks/edit/{id}', [TaskController::class, 'editTask'])->name('tasks.edit');
Route::post('/tasks/update/{id}', [TaskController::class, 'updateTask'])->name('tasks.update');
Route::delete('/tasks/delete/{id}', [TaskController::class, 'deleteTask'])->name('tasks.delete');
