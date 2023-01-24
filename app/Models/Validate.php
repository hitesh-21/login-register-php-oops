<?php
    namespace App\Models;
    class Validate extends User {
        public $errors=[];
        public $data;

        public function __construct($data) {
            parent::__construct();
            $this->data=$data;
            foreach ($this->data as $key => $value) {
               $this->required($key,$value);
           }
        }
        public function required($key,$val) {
            if(empty($val)) {
                $this->errors[]= "$key is required";
            }
        }
        public function exist(){
            $email=$this->data['email'];
            // $this->required('email',$email);
            $sql="SELECT * FROM $this->table WHERE email='$email'";
            $res=$this->connection->query($sql);
            if($res->num_rows == 0) {
                return  true;
            }else{
                $this->errors[]="Email already exist";
            }
        }
        public function showError() {
            foreach ($this ->errors as $error) {
                # code...
                echo $error;
                echo'<br>';
              }
        }
    }

