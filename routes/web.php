<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
Route::get('students', [StudentController::class, 'index'])->name('students');
Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');
Route::get('student-edit/{id}',[StudentController::class, 'editStudents'])->name('student-edit');
Route::post('student-update',[StudentController::class, 'updateStudents'])->name('student-update');
Route::get('delete-Student/{id}',[StudentController::class, 'deleteStudent'])->name('delete-Student');