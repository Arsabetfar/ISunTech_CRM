<?php

    //require_once "../../app/router/route.php";
    use App\Controllers\userController as userController;
    use App\Router\web\Route as Route;

    Route::get('/users', [userController::class,'index']);
    Route::get('/create_user', [userController::class,'create']);
    Route::post('/store_user', [userController::class,'store']);
    Route::get('/edit_user/{id}', [userController::class,'edit']);
