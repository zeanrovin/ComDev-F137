<?php
include('session.php');
?>


<!DOCTYPE html>



	<html>
	<head>
		<title>Montalban National High School- F137 System</title>
		<link rel="shortcut icon" href="ghead.png" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 		 <!-- Ionicons -->
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  		<!-- daterange picker -->
  		<link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker-bs3.css">
  		<!-- bootstrap datepicker -->
  		<link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
		
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><b>MNHS| F137 System</b></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="viewall.php"><span class="glyphicon glyphicon-user"></span>View All Students</a></li>
						<li><a href="add1.php"><span class="glyphicon glyphicon-plus-sign"></span> Add</a></li>
						<li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
							<div class="modal fade" id="myModal">
							<div class="modal-dialog">
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								  <h4 class="modal-title"><strong>HELP</strong></h4>
								</div>
								<div class="modal-body">
								  <!-- HELP content-->
								  <div id="HOW" >HOW TO USE SEARCH BOX?</div>
								  <div id="CONTENT">Using the radio button you can filter your search. After choosing the desired button,type the word that you are looking for and click the button submit. </div>
								  <hr>
								  <div<hr>
								  <div id="HOW" >HOW TO ADD A NEW RECORD?</div>
								  <div id="CONTENT">Adding a new record can be done by clicking the add panel beside help. After clicking it will direct you to another page and you can start inputting the informations and click the submit button.</div>
								  <hr>
								  <div id="HOW" >HOW TO UPDATE/DELETE AN EXISTING RECORD?</div>
								  <div id="CONTENT">Updating or Deleting can only be done if you already have search a certain record. You will be directed to a new page where you can see the delete and update icon. Click the desired button to do changes in the records.</div>
								  <hr>
								  <div id="HOW" >HOW TO ADD A NEW ADMIN?</div>
								  <div id="CONTENT">Adding a new admin can be done by clicking the settings panel beside help. After clicking it will show a dropdown menu and choose the Add New Admin menu. It will direct you to a new page and you can start adding a new user.</div>
								  <hr>
								  <div id="HOW" >HOW TO UPDATE/DELETE YOUR ACCOUNT?</div>
								  <div id="CONTENT">Updating or Deleting an account can be done by clicking the settings panel beside help. After clicking it will show a dropdown menu and choose the Customize Admin menu. It will direct you to a new page and you can start changing or deleting your user.</div>
								</div>
							  </div>
							</div>
						</div>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a>
								<ul class="dropdown-menu">
									<li><a href="customizeadmin.php"> Customize Admin</a></li>	
									<li><a href="admin.html"> Add New Admin</a></li>	
								</ul>
						</li>
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sign Out </a></li>
					</ul>
				</div>
			</div>
		</nav>
		
<div class="container">

<!-- ORIGINAL CODE -->
			<form name="input" action="add.php" method="post">
				<div class="col-lg-4">
				<div class="form-group">
					<b>FIRST NAME</b> <BR/><input type ="text"  class="form-control" name="firstname" required> 
				</div>
				<div class="form-group">
					<b>LAST NAME</b> <BR/><input type ="text"  class="form-control" name="lastname" required> 
				</div>
				<div class="form-group">
					<b>MIDDLE NAME</b> <BR/><input type ="text"  class="form-control" name="middlename" required> 
				</div>
				<div>
					<b>GENDER</b><BR />
					<label class="radio-inline"><input type ="radio" name="Gender" value="Female" required/> Female <br/></label> 
					<label class="radio-inline"><input type ="radio" name="Gender" value="Male"required/> Male <br /> </label><br/><br />
				</div>
				<div class="form-group">
					<b>RELIGION</b> <BR/><input type ="text"  class="form-control" name="Religion" required> 
				</div>
				
				<div class="form-group">
				<br><b>ADDRESS 1</b> <BR/><input type ="text"  class="form-control" name="address1" required>
				</div>
				<div class="form-group">
					<b>ADDRESS 2</b> <BR/><input type ="text"  class="form-control" name="address2"> 
				</div>
				</div>
				<div class="col-lg-2">
				</div>

				<div class="col-lg-4">
				<div class="form-group">
					<b>STUDENT NO.</b> <BR/><input type ="text" class="form-control" name="studentno" required> 
				</div>
				
                
                 
                  <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">BIRTHDATE</label>
        <input class="form-control" id="date" name="date" placeholder="YYYY-MM-DD" type="text" required/>
      </div>
			
				<div class="form-group">
					<b>Age</b> <BR/><input type ="text" class="form-control" name="age" required> 
				</div>
				
				<div class="form-group">
					<b>School Year </b> <BR/><input type ="text" class="form-control" name="schoolyear" required> 
				</div>

			
				 <input type="Submit" value="Add Student" class="btn btn-primary">
				 <input type="RESET" value="Reset" class="btn default">
				</div>
			</form>
	</div>
		
</body>
</html>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
    };
    date_input.datepicker(options); //initiali110/26/2015 8:20:59 PM ze plugin
</script>

