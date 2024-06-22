<?php

use App\CQRS\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function(){
    Route::prefix('cqrs')->group(function(){
        Route::get('health-check',function(){
            return 'CQRS module api is healthy';
        });

        Route::prefix('user')->group(function(){
            Route::get('/{user_id}',[UserController::class,'getUserById']);
            Route::post('create',[UserController::class,'create']);
        });
    });
});
