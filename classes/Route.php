<?php

class Route{
    private static $valid_routes = array();
    public static function get($route, $function){
        // handle get requests
        self::$valid_routes[] =  $route;
        // run the callback function
        if ($_GET["url"] == $route){
            $function->__invoke();
        }
    }
    public static function post($route, $function){
        // Handle post requests
    }
}