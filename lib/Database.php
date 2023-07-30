<?php

include_once '../config/config.php';
class Database{

    public $host=HOST;
    public $user=USER;
    public $password=PASSWORD;
    public $database=DATABASE;

    public $link;
    public $error;
    public function __construct(){
         
      $this->dbConnect();

    }
    public function dbConnect(){

      $this->link=mysqli_connect($this->host,$this->user,$this->password,$this->database);
      if(!$this->link){

        $this->error="Database connection failed";
        echo "Database connection failed";
        return false;
      }

      echo "Database connection Succesed";

    }

    //insert

    public function insert($query){
         
      $result=mysqli_query($this->link,$query);
      if($result){
         
        echo "good";
          
      }

    }


    //select

    public function select($query){
         
      $result=mysqli_query($this->link,$query);
      if(mysqli_num_rows($result)>0){
         
         return $result;
          
      }
      else{
        return false;
      }

    }
   //delete
    public function delete($query){
         
      $result=mysqli_query($this->link,$query);
      if($result){
         
        echo "good";
          
      }

    }



}




?>