<?php
session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
	require_once('../ClassDB.php');
?>
<!Doctype html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css1.css" />
	<link rel="stylesheet" type="text/css" href="css2.css" />
	<style>


</style>
	
	</head>
	
<?php
	include('Header.php');
?>
	
<body style="background:#F2F2F2;">
	<div class="content-wrapper" style="margin-top:160px;">
        <div class="container" style="background-color:white;">
          <!-- Content Header (Page header) -->
        
		<form method="post">
          <!-- Main content -->
          <section class="content">
            <div class="row">
	    
			<div class="col-md-12">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					 <input style="margin-bottom:20px;" type="button" id="back" value="Back" name="back" class="pull-right btn btn-primary col-lg-1"/>
				  <div class="row">
				 
					 <div class="col-md-3 col-md-offset-5">
						
						  <div class="form-group">
								<label for="date">Student No.</label><br>
								<input type="text" class="form-control" name="txtID" placeholder="Student No." required>
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                
                   </div>
                  </div><!-- /.form group -->
				
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
            <div class="col-md-6">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  
						  <div class="form-group">
								<label for="date">Family Name:</label><br>
								<input type="text" class="form-control" name="pascual" placeholder="Middle Name" required>
								<label for="date">First Name:</label><br>
								<input type="text" class="form-control" name="marvin" placeholder="First Name" required>
								<label for="date">Middle Name:</label><br>
								<input type="text" class="form-control" name="almario" placeholder="First Name" required>
								<?php
						
									$date1=date("Y");
									$date2=Date('Y');
									if($date1==$date1){
										$date2++;
									}
								?>
							<label for="date">School Year:</label><br>
							<div class="col-md-6">
						  
								<?php
								echo"
								<input type='number' class='form-control' name='school' value='$date1'required>
								
							
								
							</div>
							<div class='col-md-6'>
						  
						
								<input type='number' class='form-control' name='year1' value='$date2' required>
								";
								?>
								
							</div>
							
								<label for="date">Degree/Course:</label><br>
								<select class="form-control" name = "bsit" required>
									
										<option value="">Select Degree/Course</option>
													<?php	
														
														$db = new classDB;
														$db->connect();
														$db->course();
													?>
										
								</select>
								
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                 
                   </div>
                  </div><!-- /.form group -->
				
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
				
				<div class="col-md-6">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  
						  <div class="form-group">
								
								<label for="date">Major:</label><br>
								<input type="text" class="form-control" name="major" placeholder="Major" required>
								
								
								<label for="date">Address:</label><br>
								<input type="text" class="form-control" name="address" placeholder="Address" required>
								<label for="date">Year Level:</label><br>
								<select class="form-control" name="year" required>
									<option value="">Select Level</option>
										<option name = "year" value =  "First Year">First Year</option>
										<option name = "year" value =  "Second Year">Second Year</option>
								</select>
								
								
								<label for="date">Date of Birth:</label><br>
								<input type="date" class="form-control" name="date" placeholder="Date of Birth" required>
								<label for="date">Semester:</label><br>
								<select class="form-control" name = "semester" required>
										<option name = "semester" value="">Select Semester</option>
										<option name = "semester" value="First Sem">First Sem</option>
										<option name = "semester" value="Second Sem">Second Sem</option>
										<option name = "semester" value="Sum">Sum</option>
												
								</select>
								
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                
                   </div>
                  </div><!-- /.form group -->
				
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
				
				
				
				
				
				
				
				
			
			 </div><!-- /.row -->
			</section><!-- /.content -->
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<div class="modal fade" id="subject" role="dialog" data-backdrop="static" >
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Select Year Level & Course</h4>
        </div>
        <div class="modal-body">

						
										
				<div class="col-md-4">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  
						  <div class="form-group">
								<center><label style="font-size:20px;" for="date">Subject</label></center><br>
								<input type="text" class="form-control" name="sub1" required>
								<input type="text" class="form-control" name="sub2">
								<input type="text" class="form-control" name="sub3">
								<input type="text" class="form-control" name="sub4">
								<input type="text" class="form-control" name="sub5">
								<input type="text" class="form-control" name="sub6">
								<input type="text" class="form-control" name="sub7">
								<input type="text" class="form-control" name="sub8">
								<input type="text" class="form-control" name="sub9">
								<input type="text" class="form-control" name="sub10">
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
													
                   </div>
                  </div><!-- /.form group -->
				
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
				
				
				
				<div class="col-md-4">
				  <div class="box box-warning">
					<div class="box-body">
					  <!-- Date range -->
					  <div id="form">
						
					  <div class="row">
						 <div class="col-md-12">
							  
							  <div class="form-group">
									<center><label style="font-size:20px;" for="date">Subject Description</label></center><br>
									<input type="text" class="form-control" name="des1" required>
									<input type="text" class="form-control" name="des2">
									<input type="text" class="form-control" name="des3">
									<input type="text" class="form-control" name="des4">
									<input type="text" class="form-control" name="des5">
									<input type="text" class="form-control" name="des6">
									<input type="text" class="form-control" name="des7">
									<input type="text" class="form-control" name="des8">
									<input type="text" class="form-control" name="des9">
									<input type="text" class="form-control" name="des10">
									
							  </div><!-- /.form group -->
						</div>
					  </div>	
				   
					  
														
					   </div>
					  </div><!-- /.form group -->
					
					</div><!-- /.box-body -->
						
					</div><!-- /.box -->
					
					
					
					
					
				<div class="col-md-4">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  
						  <div class="form-group">
								<center><label style="font-size:20px;" for="date">Unit</label></center><br>
								<input type="text" class="form-control" name="unit1" required>
								<input type="text" class="form-control" name="unit2">
								<input type="text" class="form-control" name="unit3">
								<input type="text" class="form-control" name="unit4">
								<input type="text" class="form-control" name="unit5">
								<input type="text" class="form-control" name="unit6">
								<input type="text" class="form-control" name="unit7">
								<input type="text" class="form-control" name="unit8">
								<input type="text" class="form-control" name="unit9">
								<input type="text" class="form-control" name="unit10">
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
													
                   </div>
                  </div><!-- /.form group -->
				
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->

				
		
											
											
											
											<div class="modal-footer">
										  <input class="btn btn-primary btn-sm" type="submit" name="save" value="Display" class="button"> &nbsp; 
										  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button> 
											</div>
										
								
					
        </div>
      
      </div>
      
    </div>
  </div>
			</form>	
         <center> 
        <a href="#" class="btn btn-primary btn-md" type="button" data-toggle="modal" data-target="#subject">Add Subject</a>   
		</center>
		<hr>
		  </div><!-- /.content-wrapper -->
        </div><!-- /.container -->
     
	<?php
	require_once('../ClassDB.php');
								if(isset($_POST['save'])){
									
										$db = new classDB;
										$db->connect();
										$db->addstudent();
									
										$db = new classDB;
										$db->connect();
										$db->addsubject();
									
										$db = new classDB;
										$db->connect();
										$db->up();
										echo "<script type='text/javascript'>alert('Successfully added new Student!');</script>";
										echo"<script>document.location='StudentRecord'</script>";
									
								}
								
	?>
	
	
     <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
	 <script src="jquery/jquery.dataTables.min.js"></script>
    <script src="jquery/dataTables.bootstrap.min.js"></script>
<script>   
   $(function () {
        $("#data").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
	  
	  $("#back").click(function(){
		  document.location='StudentRecord'
	  })
</script>
</body>
</html>



