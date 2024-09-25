<?php
namespace App\Router\Web;

class Route{
    public static function get($route, $context)
    {
//        echo "<br/>";
//        echo "&&&&&";
//        echo "<br/>";
//        print_r($route);
//        print_r($context);
        $controller = $context[0];
        $controller = explode("\\",$controller);
        $controller = array_splice( $controller, -1)[0];
        $method = $context[1];
        global $globalRoutes;
        array_push($globalRoutes['get'],array('route'=>trim($route, "/ "),'controller'=>$controller,'method'=>$method));
    }
    public static function post($route, $context)
    {
        $controller = $context[0];
        $controller = explode("\\",$controller);
        $controller = array_splice( $controller, -1)[0];
        $method = $context[1];
        global $globalRoutes;
        array_push($globalRoutes['post'],array('route'=>trim($route, "/ "),'controller'=>$controller,'method'=>$method));
    }
    public static function put($route, $context)
    {
        $controller = $context[0];
        $controller = explode("\\",$controller);
        $controller = array_splice( $controller, -1)[0];
        $method = $context[1];
        global $globalRoutes;
        array_push($globalRoutes['put'],array('route'=>trim($route, "/ "),'controller'=>$controller,'method'=>$method));
    }
    public static function delete($route, $context)
    {
        $controller = $context[0];
        $controller = explode("\\",$controller);
        $controller = array_splice( $controller, -1)[0];
        $method = $context[1];
        global $globalRoutes;
        array_push($globalRoutes['delete'],array('route'=>trim($route, "/ "),'controller'=>$controller,'method'=>$method));
    }


}