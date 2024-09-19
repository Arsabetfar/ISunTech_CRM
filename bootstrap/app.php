<?php
    echo realpath(__DIR__."/../");
    require_once realpath(__DIR__."/../")."/config/config.php";
    require_once realpath(__DIR__."/../")."/app/routes/web.php";
    require_once realpath(__DIR__."/../")."/app/routes/api.php";


?>