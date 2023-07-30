<?php

 include_once '../classes/Reports.php';
 
 $re=new Reports();
 $getre=[];
if(isset($_POST['submit'])){
 if($_SERVER['REQUEST_METHOD']=='POST'){

	$getre=$re->getInvoiceDate($_POST);

}
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>ERP</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/custom.css">
		
		
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
  


<div class="wrapper">
     
	  <div class="body-overlay"></div>
	 
	 
	 <div id="sidebar">
	    <div class="sidebar-header">
		 
		</div>
		<ul class="list-unstyled component m-0">
		<li class="active">
		  <a href="../index.php" class="dashboard"><i class="material-icons"></i> DashBoard</a>
		  </li>
		  <li class="active">
		  <a href="CustomerList.php" class="dashboard"><i class="material-icons"></i> Customer List</a>
		  </li>
                   <li class="active">
		  <a href="ItemList.php" class="dashboard"><i class="material-icons"></i>Item List </a>
		  </li>
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons"></i>Reports
		  </a>
		  <ul class="collapse active" id="homeSubmenu1">
		     <li><a href="InvoiceReport.php">Invoice report</a></li>
			 <li><a href="InvoiceItemReport.php">Invoice item report</a></li>
			 <li><a href="ItemReport.php">Item report</a></li>
		  </ul>
		  </li>
		  
		  
		 
		  
		
		
		</ul>
	 </div>
	 
   
   
   
   
      <div id="content">
	     
		     
		  <div class="top-navbar">
		     <div class="xd-topbar">
			     <div class="row">
				     <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
					    <div class="xp-menubar">
						    <span class="material-icons text-white">signal_cellular_alt</span>
						</div>
					 </div>
					 
					
					 
					
					 
				 </div>
				 
				 <div class="xp-breadcrumbbar text-center">
				    <h4 class="page-title">Invoice report</h4>
				
				 </div>
				 
				 
			 </div>
		  </div>
		  
		  
		     
		      <div class="main-content">
			     <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper">
					     
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">Select Date Range</h2>
							 </div>
                              
							 <div class="col-sm-6 p-0 flex justify-content-lg justify-content-center">
                             <form class="form-inline" method="POST"  action="InvoiceReport.php">
                             <div class="form-group mx-sm-3 ">
    <label for="inputPassword2" class="col-form-label mr-2 ">From</label>
    <input type="date" class="form-control" name="fromdate" >
  </div>
  <div class="form-group mx-sm-3 ">
    <label for="inputPassword2" class="form-label mr-2">To</label>
    <input type="date" class="form-control"  name="todate">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Search</button>
</form>
							 </div>
					     </div>
					   </div>
					   
					   <table class="table table-striped table-hover">
					      <thead>
						     <tr>
							 <th><span class="custom-checkbox">
						</th>
							 <th>Invoice Number</th>
							 <th>Invoice Date</th>
							 <th>Customer</th>
							 <th>Customer District</th>
							 <th>Item Count</th>
                             <th>Invoice amount</th>
							 </tr>
						  </thead>
						  
						  <tbody>

						  <?php
							
							if($getre){

								while($row=mysqli_fetch_assoc($getre)){

                                  ?>

<tr>
							 <th><span class="custom-checkbox">
							</th>
							 <th><?=$row['invoice_no']?></th>
							 <th><?=$row['date']?></th>
							 <th><?=$row['first_name']?></th>
							 <th><?=$row['district']?></th>
							 <th><?=$row['item_count']?></th>
							 <th><?=$row['amount']?></th>

      
							 <th> </th>
							 </tr>
							 

								  <?php
                                

								}

							}
							
							
							?>
						     
     
							
							
						
							 
						
							 
						  </tbody>
						  
					      
					   </table>

		   
					
					   
					   
					   
					   
	
					   
					   
					   
					   
					   </div>
					</div>
					
					



		

					
					   
					   
	
		  
		  
		 
		 
	
		 
		 
		 
		 
	  </div>
   
</div>








  
   <script src="../js/jquery-3.3.1.slim.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });
		  
		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });
		  
	   });
  </script>
  
  



  </body>
  
  </html>


