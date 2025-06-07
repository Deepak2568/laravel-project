<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatrimonyController;

// Route::get('/', function () {
//     return view('index');
// });

// Route::view('/register','register');

Route::controller(MatrimonyController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/register', 'register');
    Route::post('/register', 'store');
    Route::get('/view', 'view');
    Route::get('/edit/{id}', 'edit');
    Route::put('/update/{id}', 'update');
    Route::delete('/destroy/{id}', 'delete');
});
