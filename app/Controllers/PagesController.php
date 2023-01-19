<?php
namespace App\Controllers;

use App\Models\User;

Class PagesController{
    public function about(){
        require_once 'resources/views/about.php';
    }

    public function privacy(){
        echo "Welcome to Privacy PAge";
    }
}