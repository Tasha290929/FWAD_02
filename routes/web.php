<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [HomeController::class, 'index']); 
Route::get('/about', [HomeController::class, 'about'])->name('about');


/*Route::prefix('tasks')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');  
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');  
    Route::post('/', [TaskController::class, 'store'])->name('tasks.store');  
    Route::get('/{id}', [TaskController::class, 'show'])->name('tasks.show')->where('id', '[0-9]+'); 
    Route::get('/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit')->where('id', '[0-9]+');  
    Route::put('/{id}', [TaskController::class, 'update'])->name('tasks.update')->where('id', '[0-9]+'); 
    Route::delete('/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy')->where('id', '[0-9]+');  
});
*/
Route::resource('tasks', TaskController::class)->where(['task' => '[0-9]+']);
