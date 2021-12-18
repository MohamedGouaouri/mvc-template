<?php
// Load Classes automatically

function load_classes($class_name){
    $path_to_file = "classes/" . $class_name . ".php";
    if (file_exists($path_to_file)){
        require $path_to_file;
    }
}

function load_controllers($class_name){
    $path_to_file = "controllers/" . $class_name . ".php";
    if (file_exists($path_to_file)){
        require $path_to_file;
    }
}

function load_models($class_name){
    $path_to_file = "models/" . $class_name . ".php";
    if (file_exists($path_to_file)){
        require $path_to_file;
    }
}

spl_autoload_register('load_classes');
spl_autoload_register('load_controllers');
spl_autoload_register('load_models');