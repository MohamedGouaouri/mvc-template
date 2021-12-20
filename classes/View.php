<?php


use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

class View{
    // static method to create views
    public static FilesystemLoader $loader;
    public static Environment $twig;
    public static function make(string $viewName, ...$data){
        // Load a view and pass data
//        require_once ("resources/views/"."$viewName".".php");

        try {
            echo self::$twig->render($viewName, $data);
        } catch (LoaderError $e) {
            echo $e->getMessage();
        } catch (RuntimeError $e) {
            echo $e->getMessage();
        } catch (SyntaxError $e) {
            echo $e->getMessage();
        }
    }
}