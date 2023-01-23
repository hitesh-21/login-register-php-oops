<?php
use App\Models\User;

function auth(){
    if(!isset($_SESSION['login_user'])){
        return null;
    }

    $user = new User();
    $userdata = $user->getUserData($_SESSION['login_user']);
    return $userdata;
}