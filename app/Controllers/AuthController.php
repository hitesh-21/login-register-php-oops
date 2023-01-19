<?php
namespace App\Controllers;

use App\Models\User;

Class AuthController{
    public function register(){
        require_once "resources/views/auth/register.php";
    }

    public function registerPost(){
        $user = new User();
        $user->insert($_POST);

        header("Location: register");
    }

    public function login(){
        echo "Login PAge";
    }
}