<?php
    
   include_once '../lib/Database.php';
   class District{
    
   
   


    public $db;


    public function __construct(){

        $this->db=new Database();

    }

   



    

    public function getDistrict(){
        
          $query="SELECT * FROM district ";
          $result=$this->db->select($query);
          return $result;
    }


   
       


   }





?>