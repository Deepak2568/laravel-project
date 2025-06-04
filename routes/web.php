<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',[StudentController::class, 'index']);
// Route::get('/create',[StudentController::class, 'create']);
// ROute::post('/store',[StudentController::class, 'store']);
// Route::get('/edit/{id}',[StudentController::class, 'edit']);
// Route::put('/update/{id}',[StudentController::class, 'update']);
// Route::delete('/delete/{id}',[StudentController::class, 'delete']);


// Group the routes for the StudentController
Route::controller(StudentController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/store', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::put('/update/{id}', 'update');
    Route::delete('/delete/{id}', 'delete');
});