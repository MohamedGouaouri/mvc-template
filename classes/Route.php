<?php

class Route{
    private static $valid_routes = array();
    public static function set($route, $function){
        self::$valid_routes[] =  $route;
        // run the callback function
        if ($_GET["url"] == $route){
            $function->__invoke();
        }
    }

}