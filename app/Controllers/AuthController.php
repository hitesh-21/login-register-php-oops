<?php
namespace App\Controllers;

use App\Models\User;
use App\Models\Validate;

Class AuthController{
    public function register(){
        require_once "resources/views/auth/register.php";
    }

    public function registerPost(){
         $validation=new validate($_POST);
         if(empty($validation->errors)){
              $user = new User();
              $user->insert($_POST);
                  header("Location: register");
              echo'Registered Succesful';
          }else{
            $validation->show_error();
          }
        } 
    public function login(){
        require_once "resources/views/auth/login.php";
    }

    public function loginPost(){
        echo'hello';
        $login_valid=new Validate();
        echo'<pre>';
        print_r($login_valid());
        die;
        $user = new User();
        $loginUser = $user->checkIfUserExists($_POST['email'], md5($_POST['password']));

        if($loginUser === false){
            return 'Invalid Credentials';
        }

        $_SESSION['login_user'] = $loginUser;
        
        header("Location: profile");
    }
}