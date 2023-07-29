<?php
    
   include_once './lib/Database.php';
   class SubCategory{
    
   
   


    public $db;


    public function __construct(){

        $this->db=new Database();

    }

   



    

    public function getSubCategory(){
        
          $query="SELECT * FROM item_subcategory ";
          $result=$this->db->select($query);
          return $result;
    }
       


   }





?>