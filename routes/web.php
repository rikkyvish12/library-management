<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\StudentController;
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
})->middleware('guest');

Route::post('/', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/Change-password', [LoginController::class, 'changePassword'])->name('change_password');


Route::middleware('auth')->group(function () {
    Route::get('change-password',[dashboardController::class,'change_password_view'])->name('change_password_view');
    Route::post('change-password',[dashboardController::class,'change_password'])->name('change_password');
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');


    // books CRUD
    Route::resource('book',BookController::class);
    // Route::get('/books', [BookController::class, 'index'])->name('books');
    // Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    // Route::get('/book/edit/{book}', [BookController::class, 'edit'])->name('book.edit');
    // Route::post('/book/update/{id}', [BookController::class, 'update'])->name('book.update');
    // Route::post('/book/delete/{id}', [BookController::class, 'destroy'])->name('book.destroy');
    // Route::post('/book/create', [BookController::class, 'store'])->name('book.store');

    // students CRUD
    Route::get('/students', [StudentController::class, 'index'])->name('students');
    Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
    Route::get('/student/edit/{student}', [StudentController::class, 'edit'])->name('student.edit');
    Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::post('/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
    Route::post('/student/create', [StudentController::class, 'store'])->name('student.store');
    Route::get('/student/show/{id}', [StudentController::class, 'show'])->name('student.show');


});
