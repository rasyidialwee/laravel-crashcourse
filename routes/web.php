<?php

use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CatController::class, 'index']);
