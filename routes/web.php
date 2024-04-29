<?php

use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CatController::class, 'index'])->name('cats.index');
Route::delete('/cats/{cat}', [CatController::class, 'destroy'])->name('cats.destroy');
Route::get('/cats/{cat}', [CatController::class, 'edit'])->name('cats.edit');
Route::put('/cats/{cat}', [CatController::class, 'update'])->name('cats.update');
