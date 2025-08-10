<?php

use app\Models\Student;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index']);
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);

Route::get(
    'students/trash/{id}',
    [StudentController::class,'trash']
)->name('students.trash');

Route::get(
 'students/trashed/',
    [StudentController::class, 'trashed']
    )->name('students.trashed');



Route::get(
    'students/restore/{id}',
    [StudentController::class, 'restore']
    )->name('students.restore');

