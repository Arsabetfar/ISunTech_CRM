<?php

use App\Controllers\userController as userController;
use App\Router\Api\Route as Route;

    Route::get('/users22', [userController::class,'index']);
    Route::get('/create_user22', [userController::class,'create']);
    Route::post('/store_user', [userController::class,'store']);