<?php


class LoginController extends Controller
{
    public function authenticate($username, $password){
        if ((strcmp($username, "mohamed") == 0) && (strcmp($password, "mohamed") == 0)){
            Session::start();
            Session::set("loggedIn", true);
            Session::set("name", "mohamed");
            return true;
        }
        return false;
    }
}