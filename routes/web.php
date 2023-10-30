<?php

use App\Http\Controllers\AddImgSpeiceController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SpeciesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//? routes login
Route::get('/auth/login',  [LoginController::class, 'index']);
Route::post('/auth/login',  [LoginController::class, 'store']);
Route::post('/auth/logOut', [LogOutController::class, 'store']);
//? register
Route::get('/auth/register', [RegisterController::class, 'index']);
Route::post('/auth/register', [RegisterController::class, 'store']);

//? courses
Route::middleware(['auth'])->group(function () {
    Route::get('/courses', [CoursesController::class, 'index']);
    Route::get('/courses/{id_course}', [CoursesController::class, 'show']);
    Route::get('/courses/{id_course}/learn/{id_video}', [CoursesController::class, 'detailCourse']);
});


//? admin route
Route::get('/admin/dashboard',          [DashboardController::class, 'index']);
//todo-> COURSES MODULE
Route::get('/admin/courses/add', [CoursesController::class, 'create']);
Route::get('/admin/courses/{id_course}', [CoursesController::class, 'show']);
Route::post('/admin/courses/add',       [CoursesController::class, 'store']);
//Route::update('/admin/courses/{id_course}', [CoursesController::class, 'update']);
//todo-> SPECIES MODULE
Route::get('/admin/species/add', [SpeciesController::class, 'create']);
Route::post('/admin/species/add', [SpeciesController::class, 'store']);
Route::get('admin/species/edit/{id_species}', [SpeciesController::class, 'show']);
Route::put('admin/species/edit/{id_species}', [SpeciesController::class, 'update']);
Route::delete('admin/species/delete/{id_species}', [SpeciesController::class, 'detroy']);
Route::get('/admin/species/add-image/{id}', [AddImgSpeiceController::class, 'index']);
Route::post('/admin/species/add-image', [AddImgSpeiceController::class, 'store']);


//? page 404
Route::fallback(function () {
    return view('404');
});
