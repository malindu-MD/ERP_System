<?php
    
   include_once '../lib/Database.php';
   class Customer{
    
   
   


    public $db;


    public function __construct(){

        $this->db=new Database();

    }

    public function addCustomer($data){
   
        $title=$data['title'];
        $firstname=$data['firstname'];
        $lastname=$data['lastname'];
        $phonenumber=$data['phonenumber'];
        $district=$data['district'];


        if(empty($title) || empty($firstname) || empty($lastname) || empty($phonenumber) || empty($district)){

         
          $msg="Fills must not be empty";
          return $msg;

        }
        else{

        $query="INSERT INTO `customer`( `title`, `first_name`, `last_name`, `contact_no`, `district`) VALUES ('$title','$firstname','$lastname','$phonenumber','$district')";
        
        $this->db->insert($query);

        }



    }

    public function getAllCustomers(){
        
          $query="SELECT * FROM customer ORDER BY id DESC";
          $result=$this->db->select($query);
          return $result;
    }
       


   }





?>