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
        require_once "resources/views/auth/login.php";
    }

    public function loginPost(){
        $user = new User();
        $loginUser = $user->checkIfUserExists($_POST['email'], md5($_POST['password']));

        if($loginUser === false){
            return 'Invalid Credentials';
        }

        $_SESSION['login_user'] = $loginUser;
        
        header("Location: profile");
    }
}