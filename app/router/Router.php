<?php
namespace App\Router;
use ReflectionMethod;
class Router
{
    private $currentRoute;
    private $methodField;
    private $routes;
    private $params = [];
    private $result = false;

    public function __construct()
    {
        $this->currentRoute = explode("/",CURRENT_ROUTE);
        global $globalRoutes;
        $this->routes = $globalRoutes;
        $this->methodField = $this->findMethodField();
//        echo "<br/>";
//        echo "---------------";
//        echo "<br/>";
//        print_r ($this->currentRoute);
//        echo "<br/>";
//        echo "---------------";
//        echo "<br/>";
//        print_r($this->routes);
//        echo "<br/>";
//        echo "---------------";
//        echo "<br/>";
//        print_r($this->methodField);
//        echo "<br/>";
//        echo "---------------";
//        echo "<br/>";

    }

    private function findMethodField()
    {
        $method_field = strtolower($_SERVER["REQUEST_METHOD"]);

        if ($method_field == "post")
        {
            if ($_POST["methodName"]=="put")
                $method_field = "put";
            if ($_POST["methodName"]=="delete")
                $method_field = "delete";
        }
        return $method_field;
    }

    // edit_user/{id}
    // edit_user/1
    public function checkMethod()
    {
        $reservedRoutes = $this->routes[$this->methodField];
//        echo "<br/>";
//        echo "---------------";
//        echo "<br/>";
//        print_r( $reservedRoutes);
        foreach ($reservedRoutes as $oneRoute) {
//            echo "<br/>";
//            echo "---------------";
//            echo "<br/>";
//            print_r( $oneRoute);

            $oneRouteArray =  explode("/",$oneRoute["route"]);
//            echo "<br/>";
//            echo "******";
//            echo "<br/>";
//            print_r( $oneRouteArray);
            if(sizeof($this->currentRoute)==sizeof($oneRouteArray))
            {
                foreach ($oneRouteArray as $key=>$value) {
//                        echo "<br/>";
//                        echo "==============";
//                        echo "<br/>";
//                        var_dump($key);
//                        var_dump($value);
                        if ($this->currentRoute[$key] == $value)
                            $this->result = true;

                        if ($this->currentRoute[$key] == $value) {
                            if (!empty($oneRouteArray[$key + 1])) {
                                if (substr($oneRouteArray[$key + 1], 0, 1) == "{" &&
                                    substr($oneRouteArray[$key + 1], -1, 1) == "}") {
                                    array_push($this->params, $this->currentRoute[$key + 1]);
                                } else
                                    $this->params = [];
                            }
//                            echo "<br/>";
//                            echo "@@@@@@@@@@@@@@@@@@@@@@@@";
//                            echo "<br/>";
//                            var_dump($this->params);
                        }
                    }
                    if ($this->result) {
                        $controller = "App\Controllers\\" . $oneRoute["controller"];
                        $objectController = new $controller;
//                        echo "<br/>";
//                        echo "qqqqqqqqqqqqqqqqq";
//                        echo "<br/>";
//                        echo $controller . "----------" . $oneRoute["method"];
                        if (method_exists($objectController, $oneRoute["method"])) {
                            $reflection = new ReflectionMethod($objectController, $oneRoute["method"]);
                            $parameterCount = $reflection->getNumberOfParameters();
                            if ($parameterCount == count($this->params)) {
                                call_user_func_array([$objectController, $oneRoute["method"]], $this->params);
                            }
                            else
                                $this->result = false;
                        } else
                            $this->result = false;
                    }
//                    if ($oneRouteFields == $reservedRoutes["route"])
//                    {
//
//                    }
            }
        }

        if(!$this->result) {
//            echo "<br/>";
//            echo "###############################################";
            echo "<br/>";
            echo "method not valid";
            }
//        else
//        {
//            echo "<br/>";
//            echo "###############################################";
//            echo "<br/>";
//            echo "Hellllllllllllllloooooooooooooooooo";
//        }

    }
}