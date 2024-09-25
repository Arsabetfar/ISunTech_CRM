<?php
namespace App\Router\Api;
class Route{
    public static function get($route, $context)
    {
        $controller = $context[0];
        $method = $context[1];
        global $globalRoutes;
        array_push($globalRoutes['get'],array('route'=>'api/'.$route,'controller'=>$controller,'method'=>$method));
    }
    public static function post($route, $context)
    {
        $controller = $context[0];
        $method = $context[1];
        global $globalRoutes;
        array_push($globalRoutes['post'],array('route'=>'api/'.$route,'controller'=>$controller,'method'=>$method));
    }
    public static function put($route, $context)
    {
        $controller = $context[0];
        $method = $context[1];
        global $globalRoutes;
        array_push($globalRoutes['put'],array('route'=>'api/'.$route,'controller'=>$controller,'method'=>$method));
    }
    public static function delete($route, $context)
    {
        $controller = $context[0];
        $method = $context[1];
        global $globalRoutes;
        array_push($globalRoutes['delete'],array('route'=>'api/'.$route,'controller'=>$controller,'method'=>$method));
    }


}