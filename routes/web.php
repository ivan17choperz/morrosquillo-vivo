<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



Route::get('/home', function () {
    return view('welcome');
});

//? routes login
Route::get('/auth/login', [LoginController::class, 'index']);
Route::post('/auth/login', [LoginController::class, 'store']);
//? register
Route::get('/auth/register', [RegisterController::class, 'index']);
Route::post('/auth/register', [RegisterController::class, 'store']);

//? courses
Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/courses/{id_course}', [CoursesController::class, 'show']);
Route::get('/courses/{id_course}/learn/{id_video}', [CoursesController::class, 'detailCourse']);
//todo: users with rols admin
Route::get('/courses/add', [CoursesController::class, 'store']);
Route::get('/courses/update/{id_course}', [CoursesController::class, 'edit']);
Route::post('/courses/update/{id_course}', [CoursesController::class, 'update']);
Route::post('/courses/delete/{id_course}', [CoursesController::class, 'destroy']);





//? page 404
Route::fallback(function () {
    return view('404');
});
