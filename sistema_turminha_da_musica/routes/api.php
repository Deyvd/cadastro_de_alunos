<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ContractPaymentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExperimentalClassController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\GuestHasExperimentalClassController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PersonTypeController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentResponsibleController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherHasClassController;
use App\Http\Controllers\UserController;
use App\Models\ExperimentalClass;
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
Route::apiResource('contract', ContractController::class);
Route::apiResource('contract-payment', ContractPaymentController::class);
Route::apiResource('course', CourseController::class);
Route::apiResource('experimental-class', ExperimentalClassController::class);
Route::apiResource('guest', GuestController::class);
Route::apiResource('guest-has-experimental-class', GuestHasExperimentalClassController::class);
Route::apiResource('person', PersonController::class);
Route::apiResource('person-type', PersonTypeController::class);
Route::apiResource('phone', PhoneController::class);
Route::apiResource('place', PlaceController::class);
Route::apiResource('room', RoomController::class);
Route::apiResource('student-responsible', StudentResponsibleController::class);
Route::apiResource('teacher', TeacherController::class);
Route::apiResource('teacher-has-class', TeacherHasClassController::class);
Route::apiResource('user', UserController::class);
