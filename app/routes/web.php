<?php
    echo "hhh";
    echo realpath(__DIR__);
    require_once "../app/router/web.php";
    use App\Router\Web\Route as Route;
    use App\Controllers\userController as userController;
    Route::get('/users', [userController::class,'index']);    
    Route::get('/create_user', [userController::class,'create']);
    Route::post('/store_user', [userController::class,'store']);

    echo CURRENT_ROUTE;