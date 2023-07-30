
<?php

 
 include_once '../classes/District.php';


 include_once '../classes/Customer.php';
 
 $cus=new Customer();

 if($_SERVER['REQUEST_METHOD']=='POST'){

     $cust=$cus->addCustomer($_POST);

 }





$dis=new District();
 

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

      <style>
    .warning-message {
      color: red;
      font-size: 12px;
      margin-top: 5px;
    }
  </style>

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
				    <h4 class="page-title">Customer List</h4>
				
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
							    <h2 class="ml-lg-2">Manage  Customers</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span>Add New Customer</span>
							   </a>
							  
							 </div>
					     </div>
					   </div>
					   
					   <table class="table table-striped table-hover">
					      <thead>
						     <tr>
							 <th><span class="custom-checkbox">
						</th>
							 <th>Title</th>
							 <th>First Name</th>
                             <th>Last Name</th>
                             <th>Contact Number</th>
							
							 </tr>
						  </thead>
						  
						  <tbody>


                          <?php
							
							$allitem=$cus->getAllCustomers();
							if($allitem){

								while($row=mysqli_fetch_assoc($allitem)){

                                  ?>

                             <tr>
							 <th><span class="custom-checkbox">
							</th>
							 <th><?=$row['title']?></th>
							 <th><?=$row['first_name']?></th>
							 <th><?=$row['last_name']?></th>
							 <th><?=$row['contact_no']?></th>
							
							 </tr>
							 

								  <?php
                                

								}

							}
							
							
							?>
						     

						   
						
					
							 
						  </tbody>
						  
					      
					   </table>

		   
					
					   
					   
					   
					   
	
					   
					   
					   
					   
					   </div>
					</div>
					
					
									  
<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
	<form method="POST" onsubmit="return validateForm()">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		
        <div class="form-group">
		    <label>Title</label>
			<select class="form-control" id="exampleFormControlSelect1" name="title">
             <option value="Mr">Mr</option>
             <option value="Mrs">Mrs</option>
             <option value="Miss">Miss</option>
             <option value="Dr">Dr</option>
          </select>
		</div>
		<div class="form-group">
		    <label>First Name</label>
			<input type="text" class="form-control" pattern="[A-Za-z]+" title="Please enter only capital and lowercase letters."  name="firstname" required>
		</div>
        <div class="form-group">
		    <label>Last Name</label>
			<input type="text" class="form-control"  pattern="[A-Za-z]+" title="Please enter only capital and lowercase letters." name="lastname" required>
		</div>
        <div class="form-group">
		    <label>Phone Number</label>
            <input type="text" id="phoneNumberInput"  placeholder="07xxxxxxxx" class="form-control"  name="phonenumber" pattern="07\d{8}" title="Please enter a valid phone number starting with 947 followed by 8 digits." required>
            <span class="warning-message" id="warningMessage"></span>
		</div>
		<div class="form-group">
		    <label>District</label>
            <select class="form-control" id="exampleFormControlSelect1" name="district">
            <?php
			
			$allca=$dis->getDistrict();
			if($allca){

				while($row1=mysqli_fetch_assoc($allca)){


                       echo '<option value="'.$row1['id'].'">'.$row1['district'].'</option>';   



				}



			}



			
			?>
           
            </select>	
		</div>
       
		

       </div>
	  
    
      <div class="modal-footer">
	    <input type="reset"  class="btn btn-secondary" value="Cancel" >
		<input type="submit"  class="btn btn-success" value="Add" >

        
      </div>


    </div>
</form>
  </div>
</div>

					   <!----edit-modal end--------->
					   
					   
					   
					   
					   
				   <!----edit-modal start--------->
	
		  
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


       function validateForm() {
      var phoneNumberInput = document.getElementById('phoneNumberInput');
      var warningMessage = document.getElementById('warningMessage');

      var isValid = phoneNumberInput.validity.valid;
      if (!isValid) {
        warningMessage.textContent = phoneNumberInput.validationMessage;
        return false; // Prevent form submission
      }

      warningMessage.textContent = ''; // Clear the warning message
      return true; // Allow form submission
    }   
  </script>
  
  



  </body>
  
  </html>


