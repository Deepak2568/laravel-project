<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/create', function () {
//     return view('create');
// });

// Define routes for the application
Route::get('/', [EmployeeController::class, 'index']);
Route::get('/create', [EmployeeController::class, 'create']);
Route::post('/store', [EmployeeController::class, 'store']);
