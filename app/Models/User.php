<?php
namespace App\Models;

class User extends Database
{
    protected $table = "users";

    public function getUsers(){
        $sql = "SELECT * FROM $this->table";
        $result = $this->connection->query($sql);

        return $result;
    }
}
