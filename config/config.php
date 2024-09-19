<?php
namespace config;

define("APP_NAME", "ISUNTECH_CRM");
define("BASE_URL", "http://$_SERVER[HTTP_HOST]");
define("BASE_DIR", realpath(__DIR__."/../"));

$currentRoute = explode("?",$_SERVER["REQUEST_URI"])[0];
$currentRoute = ($currentRoute=="/" ? "" : substr($currentRoute,1));
define("CURRENT_ROUTE", $currentRoute);

  class Constants{
    //const PATH_ROOT = "/eshop_Adas/web";
    const BASE_URL = BASE_URL;
    const BASE_DIR = BASE_DIR;
    const APP_NAME = APP_NAME;
    const CURRENT_ROUTE = CURRENT_ROUTE;
    const DEBUG = false;
 }

 global $globalRoutes; 
 $globalRoutes = ['get'=>[],'post'=>[], 'put'=>[], 'delete'=>[]];
?>