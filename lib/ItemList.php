
<?php

 include_once '../classes/Item.php';
 include_once '../classes/Category.php';
 include_once '../classes/SubCategory.php';


 $it=new Item();
 $ca=new Category();
 $subca=new SubCategory();

 if($_SERVER['REQUEST_METHOD']=='POST'){

     $ite=$it->addItem($_POST);

 }


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
				    <h4 class="page-title">Item List</h4>
				
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
							    <h2 class="ml-lg-2">Manage  Items</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span>Add New Item</span>
							   </a>
							  
							 </div>
					     </div>
					   </div>
					   
					   <table class="table table-striped table-hover">
					      <thead>
						     <tr>
							 <th><span class="custom-checkbox">
						</th>
							 <th>Item Code</th>
							 <th>Item Name</th>
							 <th>Quantity</th>
							 <th>Unit Price</th>
							 <th>Actions</th>
							 </tr>
						  </thead>
						  
						  <tbody>

						    <?php
							
							$allitem=$it->getAllitem();
							if($allitem){

								while($row=mysqli_fetch_assoc($allitem)){

                                  ?>

<tr>
							 <th><span class="custom-checkbox">
							</th>
							 <th><?=$row['item_code']?></th>
							 <th><?=$row['item_name']?></th>
							 <th><?=$row['quantity']?></th>
							 <th><?=$row['unit_price']?></th>
							 <th>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
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
<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
	<form method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Item</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
		
        <div class="form-group">
		    <label>Item Code</label>
			<input type="text" name="itemcode" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Item Name</label>
			<input type="emil" class="form-control"  name="itemname" required>
		</div>
		<div class="form-group">
		    <label>Item category</label>
            <select class="form-control" id="exampleFormControlSelect1" name="category">
            <?php
			
			$allca=$ca->getCategory();
			if($allca){

				while($row1=mysqli_fetch_assoc($allca)){


                       echo '<option value="'.$row1['id'].'">'.$row1['category'].'</option>';   



				}



			}



			
			?>
            </select>	
		</div>
         <div class="form-group">
		    <label>Item Sub Category</label>
            <select class="form-control" id="exampleFormControlSelect1" name="subcategory">
			<?php
			
			$allsubca=$subca->getSubCategory();
			if($allsubca){

				while($row2=mysqli_fetch_assoc($allsubca)){


                       echo '<option value="'.$row2['id'].'">'.$row2['sub_category'].'</option>';   



				}



			}



			
			?>
            </select>	
		</div>
		<div class="form-group">
		    <label>Quantity</label>
			<input type="text" name="Quantity" pattern="[0-9]+(\.[0-9]+)?" title="Please enter a positive number." class="form-control" required>
		</div>
         <div class="form-group">
		    <label>Unit Price</label>
			<input type="text" name="Unitprice" pattern="^\d+(\.\d{1,2})?$" title="Please enter a valid price."   class="form-control" required>
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
	<div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
		    <label>Name</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Email</label>
			<input type="emil" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Address</label>
			<textarea class="form-control" required></textarea>
		</div>
		<div class="form-group">
		    <label>Phone</label>
			<input type="text" class="form-control" required>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>

					   <!----edit-modal end--------->	   
					   
					   
					 <!----delete-modal start--------->
		<div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this Records</p>
		<p class="text-warning"><small>this action Cannot be Undone,</small></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Delete</button>
      </div>
    </div>
  </div>
</div>

					   <!----edit-modal end--------->   
					   
					
					
				 
			     </div>
			  </div>
		  
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


