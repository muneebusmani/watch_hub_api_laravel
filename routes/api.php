<?php

use App\Http\Controllers\Api\V1\UserController;
// use App\Http\Controllers\UserProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('/userslist', UserController::class);
});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function () {
//     Route::apiResource('userprofiles', UserProfileController::class);
// });
// Route::get('/users', [UserController::class, 'index']);
