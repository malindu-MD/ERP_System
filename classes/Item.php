<?php
    
   include_once './lib/Database.php';
   class Item{
    
   
   


    public $db;


    public function __construct(){

        $this->db=new Database();

    }

    public function addItem($data){
   
        $itemcode=$data['itemcode'];
        $itemname=$data['itemname'];
        $unitprice=$data['Unitprice'];
        $quantity=$data['Quantity'];
        $category="1";
        $subcategory="2";


        if(empty($itemcode) || empty($unitprice) || empty($itemname) || empty($quantity) || empty($category) || empty($subcategory)  ){

         
          $msg="Fills must not be empty";
          return $msg;

        }
        else{

        $query="INSERT INTO `item`(`item_code`, `item_category`, `item_subcategory`, `item_name`, `quantity`, `unit_price`) VALUES ('$itemcode','$category','$subcategory','$itemname','$quantity','$unitprice')";
        
        $this->db->insert($query);

        }



    }
       


   }





?>