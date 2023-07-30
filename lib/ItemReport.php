<?php

 include_once '../classes/Reports.php';
 
 $re=new Reports();


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>ERP</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="../css/custom.css">
		
		
		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
  


<div class="wrapper">
     
	  <div class="body-overlay"></div>
	 
	 <!-------sidebar--design------------>
	 
	 <div id="sidebar">
	    <div class="sidebar-header">
		 
		</div>
		<ul class="list-unstyled component m-0">
		  <li class="active">
		  <a href="#" class="dashboard"><i class="material-icons"></i> Customer List</a>
		  </li>
                   <li class="active">
		  <a href="#" class="dashboard"><i class="material-icons"></i>Item List </a>
		  </li>
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons"></i>Reports
		  </a>
		  <ul class="collapse active" id="homeSubmenu1">
		     <li><a href="/lip/InvoiceReport.php">Invoice report</a></li>
			 <li><a href="#">Invoice item report</a></li>
			 <li><a href="#">Item report</a></li>
		  </ul>
		  </li>
		  
		  
		 
		  
		
		
		</ul>
	 </div>
	 
   
   
   
   
      <div id="content">
	     
		  <!------top-navbar-start-----------> 
		     
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
				    <h4 class="page-title">Item Report</h4>
				
				 </div>
				 
				 
			 </div>
		  </div>
		  <!------top-navbar-end-----------> 
		  
		  
		   <!------main-content-start-----------> 
		     
		      <div class="main-content">
			     <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper">
					     
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							   
							 </div>
                              
							 <div class="col-sm-6 p-0 flex justify-content-lg justify-content-center">
                           
							 </div>
					     </div>
					   </div>
					   
					   <table class="table table-striped table-hover">
					      <thead>
						     <tr>
							 <th><span class="custom-checkbox">
						</th>
							 <th>Item Name</th>
							 <th>Item Category</th>
							 <th>Item Sub Category</th>
							 <th>Item Quantity</th>
					
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
							 <th><?=$row['item_name']?>(<?=$row['item_code']?>)</th>
							 <th><?=$row['category']?></th>
							 <th><?=$row['unit_price']?></th>

      
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
					
					
									   <!----add-modal start--------->



		

					
					   
					   
	
		  
		    <!------main-content-end-----------> 
		  
		 
		 
	
		 
		 
		 
		 
	  </div>
   
</div>



<!-------complete html----------->





  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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


