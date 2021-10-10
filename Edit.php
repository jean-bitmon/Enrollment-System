
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
	
	if(isset($_POST['save'])){
		$db = new classDB;
		$db->connect();
		$db->studupdate();
	}	
?>
		<body style='background:#F2F2F2;'>
	<div class='content-wrapper' style='margin-top:150px;'>
        <div class='container' style='background-color:white;'>
          <!-- Content Header (Page header) -->
        
		<form method='post'>
          <!-- Main content -->
          <section class='content'>
            <div class='row'>
	    
			<div class='col-md-12'>
              <div class='box box-warning'>
                <div class='box-body'>
                  <!-- Date range -->
                  <div id='form'>
					 <input style='margin-bottom:20px;margin-top:10px;' type='button' id='back' value='Back' name='back' class='pull-right btn btn-primary col-lg-1'/>
				
				 
					
							
						  
						 
				
				
               
                  
                
                   </div>
                  </div><!-- /.form group -->
				
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
            <div class='col-md-3'>
              <div class='box box-warning'>
                <div class='box-body'>
                  <!-- Date range -->
                  <div id='form'>
					
				  <div class='row'>
					 <div class='col-md-12'>
						  
						  <div class='form-group'>
								<label for='date'>Family Name:</label><br>
								<input type='hidden' class='form-control' name='uid' value='<?php echo $_REQUEST["id"]; ?>' required>
								<input type='text' class='form-control' name='upascual' value='<?php echo $_REQUEST["lastname"]; ?>' required>
							
								<label for='date'>Degree/Course:</label><br>
								<select class='form-control' name = 'ubsit' required>
									
										<option><?php echo $_REQUEST["course"]; ?></option>
											<?php	
														
														$db = new classDB;
														$db->connect();
														$db->course();
													?>		
										
								</select>
								<label for='date'>Age:</label><br>
								<input type='text' class='form-control' name='uage' value='<?php echo $_REQUEST["age"]; ?>' required>
								<label for='date'>Citizenship:</label><br>
								<input type='text' class='form-control' name='ucitizenship' value='<?php echo $_REQUEST["citizenship"]; ?>'  required>
								<label for='date'>Anual Income:</label><br>
								<input type='number' class='form-control' name='uanual' value='<?php echo $_REQUEST['anual']; ?>'  required>
								<label for='date'>Dialect:</label><br>
								<input type='text' class='form-control' name='udialect' value='<?php echo $_REQUEST["dialect"]; ?>'  required>	
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                 
                   </div>
                  </div><!-- /.form group -->
				
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
				
				<div class='col-md-3'>
              <div class='box box-warning'>
                <div class='box-body'>
                  <!-- Date range -->
                  <div id='form'>
					
				  <div class='row'>
					 <div class='col-md-12'>
						  
						  <div class='form-group'>
								<label for='date'>First Name:</label><br>
								<input type='text' class='form-control' name='umarvin' value='<?php echo $_REQUEST["firstname"]; ?>' required>
								<label for='date'>Semester:</label><br>
								<select class='form-control' name = 'usemester' required>
										<option name = 'semester' value=''>Select Semester</option>
										<option name = 'semester' <?php if($_REQUEST["semester"]=='First Sem'){echo "selected";} ?> value='First Sem'>First Sem</option>
										<option name = 'semester' <?php if($_REQUEST["semester"]=='Second Sem'){echo "selected";} ?> value='Second Sem'>Second Sem</option>
										<option name = 'semester' <?php if($_REQUEST["semester"]=='Sum'){echo "selected";} ?> value='Sum'>Sum</option>
												
								</select>
								<label for='date'>Major:</label><br>
								<input type='text' value="<?php echo $_REQUEST['major']?>" class='form-control' name='umajor'>
								<label for='date'>Civil Status:</label><br>
								<select class='form-control' name = 'ucivil_status' required>
									
										<option value=''>Select Civil Status</option>
										<option name = 'civil_status' <?php if($_REQUEST["civilstatus"]=='Single'){echo "selected";} ?> value =  'Single'>Single</option>
										<option name = 'civil_status' <?php if($_REQUEST["civilstatus"]=='Married'){echo "selected";} ?> value =  'Married'>Married</option>
										
								</select>
								<label for='date'>Sex:</label><br>
								<select class='form-control' name='ugender' required>
									<option value=''>Select Gender</option>
										<option name = 'gender' <?php if($_REQUEST["gender"]=='Male'){echo "selected";} ?> value =  'Male'>Male</option>
										<option name = 'gender' <?php if($_REQUEST["gender"]=='Female'){echo "selected";} ?> value =  'Female'>Female</option>
								</select>
								<label for='date'>School Year:</label><br>
								<input type='text' class='form-control' name='uschoolyer' value='<?php echo $_REQUEST["sy"]; ?>' required>
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                
                   </div>
                  </div><!-- /.form group -->
				
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
				
				<div class='col-md-3'>
              <div class='box box-warning'>
                <div class='box-body'>
                  <!-- Date range -->
                  <div id='form'>
					
				  <div class='row'>
					 <div class='col-md-12'>
						  
						  <div class='form-group'>
								<label for='date'>Middle Name:</label><br>
								<input type='text' class='form-control'  name='ualmario' value='<?php echo $_REQUEST["middlename"]; ?>' required>
								<label for='date'>Student Type:</label><br>
								<select class='form-control' name='utype' required>
									<option value=''>Select Student Type</option>
										<option name = 'type' <?php if($_REQUEST["studentype"]=='New Freshman'){echo "selected";} ?>  value =  'New Freshman'>New Freshman</option>
										<option name = 'type' <?php if($_REQUEST["studentype"]=='Old Freshman'){echo "selected";} ?>  value =  'Old Freshman'>Old Freshman</option>
										<option name = 'type' <?php if($_REQUEST["studentype"]=='Continuing'){echo "selected";} ?>  value =  'Continuing'>Continuing</option>
										<option name = 'type' <?php if($_REQUEST["studentype"]=='Returning'){echo "selected";} ?>  value =  'Returning'>Returning</option>
										<option name = 'type' <?php if($_REQUEST["studentype"]=='Transferee'){echo "selected";} ?>  value =  'Transferee'>Transferee</option>
										<option name = 'type' <?php if($_REQUEST["studentype"]=='Cross-Enrolled'){echo "selected";} ?>  value =  'Cross-Enrolled'>Cross-Enrolled</option>
								</select>
								<label for='date'>Address:</label><br>
								<input type='text' class='form-control' name='uaddress' value='<?php echo $_REQUEST["Address"]; ?>'  required>
								<label for='date'>Religion:</label><br>
								<input type='text' class='form-control' name='ureligion' value='<?php echo $_REQUEST["religion"]; ?>' required>
								<label for='date'>Parents/Guardian Name:</label><br>
								<input type='text' class='form-control' name='uparents' value='<?php echo $_REQUEST["parent"]; ?>'  required>
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                
                   </div>
                  </div><!-- /.form group -->
				
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
				<div class='col-md-3'>
              <div class='box box-warning'>
                <div class='box-body'>
                  <!-- Date range -->
                  <div id='form'>
					
				  <div class='row'>
					 <div class='col-md-12'>
						  
						  <div class='form-group'>
								<label for='date'>Year Level:</label><br>
								<select class='form-control' name='uyear' required  >
									<option><?php echo $_REQUEST["yearlevel"]; ?></option>
									<?php	
														
														$db = new classDB;
														$db->connect();
														$db->year_level();
													?>	
								</select>
								<label for=date'>Status:</label><br>
								<select class='form-control' name='ustatus' required>
									<option value=''>Select Status</option>
										<option name = 'status' <?php if($_REQUEST["status"]=='Regular'){echo "selected";} ?>  value =  'Regular'>Regular</option>
										<option name = 'status' <?php if($_REQUEST["status"]=='Irregular'){echo "selected";} ?> value =  'Irregular'>Irregular</option>
								</select>
								<label for='date'>Date of Birth:</label><br>
								<input type='date' class='form-control' name='udate' value='<?php echo $_REQUEST["b-day"]; ?>'  required>
								<label for='date'>How Supported:</label><br>
								<input type='text' class='form-control' name='usupported' value='<?php echo $_REQUEST["supported"]; ?>'  required>
								<label for='date'>Occupation:</label><br>
								<input type='text' class='form-control' name='uoccupation' value='<?php echo $_REQUEST["occupation"]; ?>'  required>
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
													
                   </div>
                  </div><!-- /.form group -->
			
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
				
				
				
				
				
			
			 </div><!-- /.row -->
			</section><!-- /.content -->
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
	<center><input type='submit' name='save' value='Save' class='btn btn-primary'/><center>
			</form>	
        
		<hr>
		  </div><!-- /.content-wrapper -->
        </div><!-- /.container -->
     
	
	
	

	
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
</html>




	