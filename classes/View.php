<?php


class View{
    // static method to create views
    public static function make(string $viewName, $data = null){
        // Load a view and pass data
        $passed_data = $data;
        require_once ("resources/views/"."$viewName".".php");
    }
}