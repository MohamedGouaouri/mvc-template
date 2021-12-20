<?php

// Register routes


use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Load the view
View::$loader = new FilesystemLoader(__DIR__ . DIRECTORY_SEPARATOR . "resources/views");
View::$twig = new Environment(View::$loader);

Route::get("index.php", function (){
    View::make("index.php.twig", ["name" => "mohamed"]);
});

Route::get("about", function (){
    // In usual way invoke th view
    View::make("about.php.twig");
});


Route::get("contact", function (){
    // In usual way invoke th view
    View::make("contact.php.twig");
});