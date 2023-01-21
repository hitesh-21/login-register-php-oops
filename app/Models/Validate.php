<?php
namespace App\Models;

class Validate extends User
{
  private $errors=[];
  public function validate_details($data){
        if(empty($data['name']))
            {
             $this->errors[]='Name is required';
            }
        if(empty($data['password']))
            {
                $this->errors[]='password is required';
            }
        if(empty($data['email']))
            {
                $this->errors[]='Email is required';
            }else{
                $email_sql="SELECT *from `$this->table`  WHERE email='$data[email]'";
                $result = $this->connection->query($email_sql);
                if($result->num_rows == 0){
                   
                }else{
            $this->errors[]='Email already exist';
        }
            }
       return $this->errors;
      }
    public function show_error(){
        foreach ( $this->errors as $errors) {
         echo $errors;
         echo'<br>';
        }
    } 
   }