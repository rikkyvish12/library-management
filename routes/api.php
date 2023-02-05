<?php

use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [StudentController::class, 'login']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('/profile', [StudentController::class, 'profile']);
    Route::get('/refresh', [StudentController::class, 'refresh']);
    Route::get('/logout', [StudentController::class, 'logout']);
});
