<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('classes', App\Http\Controllers\ClassController::class);
Route::resource('classrooms', App\Http\Controllers\ClassroomController::class);
Route::resource('levels', App\Http\Controllers\LevelController::class);
Route::resource('batches', App\Http\Controllers\BatchController::class);
Route::resource('shifts', App\Http\Controllers\ShiftController::class);
Route::resource('courses', App\Http\Controllers\CourseController::class);
Route::resource('faculties', App\Http\Controllers\FacultyController::class);
Route::resource('times', App\Http\Controllers\TimeController::class);
Route::resource('attendances', App\Http\Controllers\AttendanceController::class);
Route::resource('academics', App\Http\Controllers\AcademicController::class);
Route::resource('days', App\Http\Controllers\DayController::class);

Route::resource('class-assignings', App\Http\Controllers\ClassAssigningController::class);
Route::resource('class-schedulings', App\Http\Controllers\ClassSchedulingController::class);
Route::resource('transactions', App\Http\Controllers\TransactionController::class);
Route::resource('admissions', App\Http\Controllers\AdmissionController::class);
Route::resource('teachers', App\Http\Controllers\TeacherController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('users', App\Http\Controllers\UserController::class);