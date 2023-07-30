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

    public function getInvoiceDate($data){
   
        $fromDate=$data['fromdate'];
        $toDate=$data['todate'];
       

        $query="SELECT invoice.invoice_no,invoice.date,customer.first_name,district.district,invoice.item_count,invoice.amount FROM invoice,customer,district WHERE invoice.customer=customer.id AND customer.district=district.id AND (invoice.date >= '$fromDate' AND invoice.date <= '$toDate')";
        $result=$this->db->select($query);
        return $result;



    }

    public function getInvoiceItemReport($data){
   
        $fromDate=$data['fromdate'];
        $toDate=$data['todate'];
       

        $query="SELECT invoice_master.invoice_no,invoice.date,customer.first_name,item.item_name,item.item_code,item_category.category,item.unit_price FROM customer,invoice_master,item,item_category,invoice where invoice_master.invoice_no=invoice.invoice_no and invoice_master.item_id=item.id and invoice.customer=customer.id and item_category.id=item.item_category and (invoice.date >= '$fromDate' and invoice.date <= '$toDate')";
        $result=$this->db->select($query);
        return $result;



    }


    public function getItemReport(){
        
        $query="SELECT DISTINCT item.item_name,item.quantity,item_subcategory.sub_category,item_category.category FROM item,item_subcategory,item_category WHERE item.item_category=item_category.id AND item.item_subcategory=item_subcategory.id GROUP BY item.item_name";
        $result=$this->db->select($query);
        return $result;
  }

       

       


   }





?>