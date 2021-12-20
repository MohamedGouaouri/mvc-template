<?php

// Register routes

Route::get("index.php", function (){

    // Load view and send data
    View::make("index", ["title" => "Minimal MVC", "name" => "Php Guru"]);
});

Route::get("about", function (){
    // In usual way invoke th view
    View::make("about");
});


Route::get("contact", function (){
    // In usual way invoke th view
    View::make("contact", ["name" => "mohamed"]);
});