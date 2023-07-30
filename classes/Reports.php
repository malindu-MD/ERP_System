<?php
    
   include_once '../lib/Database.php';
   class Reports{
    
   
   


    public $db;


    public function __construct(){

        $this->db=new Database();

    }

   
    public function getInvoiceReport(){
        
          $query="SELECT invoice.invoice_no,invoice.date,customer.first_name,district.district,invoice.item_count,invoice.amount FROM invoice,customer,district WHERE invoice.customer=customer.id AND customer.district=district.id; ";
          $result=$this->db->select($query);
          return $result;
    }
       


   }





?>