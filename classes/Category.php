<?php
    
   include_once './lib/Database.php';
   class Category{
    
   
   


    public $db;


    public function __construct(){

        $this->db=new Database();

    }

   



    

    public function getCategory(){
        
          $query="SELECT * FROM item_category ";
          $result=$this->db->select($query);
          return $result;
    }
       


   }





?>