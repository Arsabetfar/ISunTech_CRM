<?php

    //require_once "../../myautoload.php";
    require_once "../../web/lib/vendor/autoload.php";

    require_once "../../config/app.php";
    require_once "../../config/database.php";
    require_once "../../app/routes/web/route.php";
    require_once "../../app/routes/api/route.php";

    use App\Router\Router as Router;
    $router = new Router();
    $router->checkMethod();


?>