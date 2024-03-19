<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamensController;
use App\Http\Controllers\PositionsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\Employees_shiftsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/departamens', function (Request $request) {
//     return $request->departamens();
// });

Route::apiResource('/departamens', DepartamensController::class);
Route::apiResource('/positions', PositionsController::class);
Route::apiResource('/employees', EmployeesController::class);
Route::apiResource('/employees_shift', Employees_shiftsController::class);