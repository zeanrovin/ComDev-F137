<?php
$delete_key = $_GET['delete_key'];
$connection = @mysql_connect('localhost','root','');
mysql_select_db('f137') ;
$query = "DELETE FROM student_profile WHERE studentid = $delete_key";
$result = mysql_query($query);
mysql_close($connection);
?>

<html>
	<head>
		<title>Delete Succesfull</title>
		<link rel="shortcut icon" href="ghead.png" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="home.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>

<div class="container">

		<div class="jumbotron">
		<h1>Success!</h1>
		<p>Deleting information of student to the directory is successful.<br/>
		<br/>Click the button to go back to the Homepage. </p>
		<div class="col-lg-5">
			<form action ="index.php" method="get" id="form1">
			<button type="submit" form="form1" class="btn btn-primary btn-block" value="Submit">Return</button>
			</form>
		</div>
		</div>
	</div>
</head>
