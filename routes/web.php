<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('', function () {
    return view('welcome');
});

// RUTAS DE ÁREAS
Route::get('areas/create', [AreaController::class, 'create'])->name('areas.create');
Route::post('areas/store', [AreaController::class, 'salida'])->name('areas.store');
Route::get('areas/list', [AreaController::class, 'index'])->name('area.index'); 
Route::get('show/{id}', [AreaController::class, 'show'])->name('areas.show');

// RUTAS DE CENTROS DE FORMACIÓN
Route::get('trainingcenter/registrar', [TrainingCenterController::class, 'registro'])->name('trainingcenters.registrar');
Route::post('trainingcenter/dato', [TrainingCenterController::class, 'dato'])->name('trainingcenters.datos');
Route::get('trainingcenter/list', [TrainingCenterController::class, 'index'])->name('trainingcenters.index'); // <-- AGREGADA

// RUTAS DE COMPUTADORES
Route::get('computer/computador', [ComputerController::class, 'marca'])->name('computer.computador');
Route::post('computer/model', [ComputerController::class, 'model'])->name('computer.model');
Route::get('computer/list', [ComputerController::class, 'index'])->name('computer.index'); // <-- AGREGADA

// RUTAS DE INSTRUCTORES (TEACHER)
Route::get('teacher/registro', [TeacherController::class, 'registro'])->name('teacher.registro');
Route::post('teacher/admin', [TeacherController::class, 'dato'])->name('teacher.admin');

// RUTAS DE CURSOS (COURSE)
Route::get('course/registro', [CourseController::class, 'registro'])->name('course.registro');
Route::post('course/admin', [CourseController::class, 'dato'])->name('course.admin');
Route::get('course/list', [CourseController::class, 'index'])->name('course.index'); // <-- AGREGADA

// RUTAS DE APRENDICES
Route::get('Aprendice/registro', [ApprenticeController::class, 'registro'])->name('Aprendice.registro');
Route::post('Aprendice/admin', [ApprenticeController::class, 'dato'])->name('Aprendice.admin');
Route::get('Aprendice/list', [ApprenticeController::class, 'index'])->name('Aprendice.index'); // <-- AGREGADA