<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\staffdetails;


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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/post', [PostController::class, 'store']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::post('/staffs', [staffdetails::class, 'staffs']);
    Route::get('/staffget', [staffdetails::class, 'staffGet']);
    Route::post('/staff-delete/{id}', [staffdetails::class, 'deletestaff']);
    Route::put('/updateStaff/{id}', [staffdetails::class, 'updateStaff']);

    Route::post('/postPatient', [staffdetails::class, 'postPatient']);
    Route::get('/patientGet', [staffdetails::class, 'patientGet']);
    Route::post('/patient-delete/{id}', [staffdetails::class, 'deletepatient']);
    Route::put('/updatepatient/{id}', [staffdetails::class, 'updatepatient']);
    Route::post('/postAppoinment', [staffdetails::class, 'postAppoinment']);
    Route::get('getstaffid/{id}',[staffdetails::class, 'getstaffid']);
});
