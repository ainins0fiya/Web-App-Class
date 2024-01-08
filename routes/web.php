<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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

Route::get('/', function () {
    // return view('welcome');
    return view('mainpage');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/add-student', function () {
    return view('add-student');
});

Route::get('student', [StudentsController::class, 'index']);
Route::resource('addstudent', StudentsController::class);
