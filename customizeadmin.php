<!DOCTYPE html>

<?php 
session_start(); 

if(!$_SESSION['username']){ 
    header("Location: Login.html"); 
    exit; 
} 
?>

	<html>
	<head>
		<title>Montalban National High School- F137 System</title>
		<link rel="shortcut icon" href="image/ghead.png" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
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
					<a class="navbar-brand" href="index.php"><b>F137 System | MNHS</b></a>
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
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sign Out as <?php  echo $_SESSION['username']; ?></a></li>
					</ul>
				</div>
			</div>
		</nav>
		
<div class="col-md-19">
<?php
$connection = mysql_connect('localhost','root','');
mysql_select_db('gli') ;
$query = "SELECT * FROM `admin`";
$result = mysql_query($query);

echo "<ul>";

if(mysql_num_rows($result) > 0)
{
	$i=0;

echo '<div class="container">';
	echo '<table class = "table table-bordered">';
	echo'<thead>';
		echo "<tr>";
		
		while ($i< 2)
		{
			$meta = mysql_fetch_field($result, $i);
			echo '<th>' . '<b>'.$meta->name .'</b>'. '</th>';
			$i++;
			}
		echo '<th>' . '<b>'."Action".'</b>'. '</th>';
		echo "</tr>";
		echo '</thead>';
		
		echo '<tbody>';
		while ($row = mysql_fetch_row($result))
		{
			echo '<tr>';
			$count = 2;
			$y = 0;
			while ($y < $count)
			{
				$c_row = current($row);
				echo '<td>' . $c_row . '</td>';
				next($row);
				$y++;
			}
			
			echo '<td>' ."<a href='updatedeleteadmin.php?delete_key=$row[0]'> <span class='glyphicon glyphicon-remove'> </a>
						  <a href='customizeadmineditrecord.php?edit_key=$row[0]'><span class='glyphicon glyphicon-edit'></a>". '</td>';
			echo '</tr>';
		}
		echo '</tbody>';
	
	echo '</table>';
	echo '</div';
	
	}
else
	{
		echo "Record Not found! <br/>";
		Echo "<a href = 'home.php'><b>Return</b>n</a>";

	}
mysql_free_result($result);
mysql_close($connection);
?>
</div>


	
</body>
</html>