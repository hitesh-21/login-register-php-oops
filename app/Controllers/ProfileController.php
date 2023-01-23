<?php
namespace App\Controllers;

use App\Models\User;

Class ProfileController{

    public function __construct(){
        if(auth() == null){
            header("Location: login");
        }
    }

    public function profile(){
        $userdata = auth();
        require_once "resources/views/profile/index.php";
    }

    public function logout(){
        session_destroy();
        header("Location: login");
    }

}