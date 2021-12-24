<?php

// Register routes


use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Load the view
View::$loader = new FilesystemLoader(__DIR__ . DIRECTORY_SEPARATOR . "resources/views");
View::$twig = new Environment(View::$loader);

Route::get("index.php", function (){
//    View::make("index.php.twig", ["name" => "mohamed"]);
    // test the db facade
    var_dump(User::all());
});

Route::get("about", function (){
    // In usual way invoke th view
    View::make("about.php.twig", ["name" => "mohamed"]);
});


Route::get("contact", function (){
    // In usual way invoke th view
    View::make("contact.php.twig");
});


// Register post requests
Route::post("index.php", function (){
    echo $_POST["id"];
});