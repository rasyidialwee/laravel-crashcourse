<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $name = 'Rasyidi Alwee';

    return view('hello', compact('name'));
});
