<?php
namespace App\Controllers;

use App\Models\User;

Class ProfileController{

    public function __construct(){
        if(!isset($_SESSION['login_user'])){
            header("Location: login");
        }
    }

    public function profile(){
        echo "<pre>";
        print_r($_SESSION);
    }

    public function logout(){
        session_destroy();
        header("Location: login");
    }

}