<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ContractPaymentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ResponsibleController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentHasResponsibleController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherHasClassController;
use App\Http\Controllers\Usuario;
use Illuminate\Http\Request;
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

Route::resource('usuario', Usuario::class);



Route::group([
    
    'middleware' => 'api',
    'prefix' => 'auth'
    
], function ($router) {
    
    Route::post('login', [AuthController::class,  'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    
});




Route::apiResource('class-room', ClassRoomController::class);
Route::apiResource('class-room', ContractController::class);
Route::apiResource('class-room', ContractPaymentController::class);
Route::apiResource('class-room', CourseController::class);
Route::apiResource('class-room', PhoneController::class);
Route::apiResource('class-room', PlaceController::class);
Route::apiResource('class-room', ResponsibleController::class);
Route::apiResource('class-room', RoomController::class);
Route::apiResource('class-room', StudentController::class);
Route::apiResource('class-room', StudentHasResponsibleController::class);
Route::apiResource('class-room', TeacherController::class);
Route::apiResource('class-room', TeacherHasClassController::class);
Route::apiResource('class-room', ClassRoomController::class);