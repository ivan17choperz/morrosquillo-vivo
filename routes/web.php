<?php

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
    Route::get('/cursos', [CoursesController::class, 'index']);
    Route::get('/cursos/{id_course}', [CoursesController::class, 'show']);
    Route::post('/cursos/regiter-student', [CoursesController::class, 'registerCourse']);
    Route::get('/cursos/{id_course}/learn', [CoursesController::class, 'startingCourse']);
});


//? admin route
Route::get('/admin/dashboard', [DashboardController::class, 'index']);
Route::get('/admin/dashboard/get-speices', [DashboardController::class, 'getDataSpeicesChart']);
Route::get('/admin/dashboard/get-students', [DashboardController::class, 'getDataStudentsChart']);
Route::get('/admin/dashboard/get-cursos', [DashboardController::class, 'getDataCoursesChart']);

//todo-> COURSES MODULE
Route::get('/admin/cursos/add', [CoursesController::class, 'create']);
Route::post('/admin/cursos/add', [CoursesController::class, 'store']);
Route::get('/admin/cursos/edit/{id_curso}', [CoursesController::class, 'edit']);
Route::put('/admin/cursos/update/{id_curso}', [CoursesController::class, 'update']);
Route::delete('/admin/cursos/delete/{id_curso}', [CoursesController::class, 'destroy']);
//add videos of course
// Route::get('/admin/cursos/{id_curso}/add/video', [VideoController::class, 'index']);
// Route::post('/admin/cursos/{id_curso}/add/video', [VideoController::class, 'store']);

//todo-> SPECIES MODULE
Route::get('/admin/species/add', [SpeciesController::class, 'create']);
Route::post('/admin/species/add', [SpeciesController::class, 'store']);
Route::get('/admin/species/edit/{id_species}', [SpeciesController::class, 'show']);
Route::put('/admin/species/edit/{id_species}', [SpeciesController::class, 'update']);
Route::delete('/admin/species/delete/{id_species}', [SpeciesController::class, 'destroy']);


// Especies
Route::get('/especies', [SpeciesController::class, 'index']);

//? page 404
Route::fallback(function () {
    return view('welcome');
});
