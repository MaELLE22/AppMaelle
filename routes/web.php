<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
||
Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/classe/{id}', [ClasseController::class, 'show'])->name('classes.show');
Route::get('/', function () {
    return view('welcome');
});