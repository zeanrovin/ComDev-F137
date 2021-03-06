 <?php
	$connection = @mysql_connect('localhost','root','') or die("Opps something went wrong");
	mysql_select_db('f137',$connection) or die("Opps something went wrong");


	$query = mysql_query("SELECT
  SP.studentid AS `Student Id`,
  SP.firstname AS `First Name`,
  SP.lastname AS `Last Name`,
  SP.middlename AS `Middle Name`,
  SP.gender AS `Gender`,
  SP.age AS `Age`
FROM
  `student_profile` AS SP");



?>

<!DOCTYPE html>

<?php
include('session.php');
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
					<a class="navbar-brand" href="index.php"><b>MNHS | F137 System</b></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<ul class="nav navbar-nav navbar-right">
						<li><a href="viewall.php"><span class="glyphicon glyphicon-user"></span>View All Students</a></li>
						<li><a href="add1.php"><span class="glyphicon glyphicon-plus-sign"></span> Add</a></li>
						<li><a href="#Modal" data-toggle="modal" data-target="#Modal"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
							<div class="modal fade" id="Modal">
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

		<form role="form" class="search" method="post" action="search.php" id="form1" name="form1" onsubmit="return confirm_update();">
					<div class="input-group input-group-lg">
						<input type="search" placeholder="Search Directory" class="form-control" name="input" required>
						<span class="input-group-btn">
							<input class="btn btn-primary" type="submit" form="form1">Search</input><br>
						</span>
					</div>
					<br>
				</form>

	<?php
		if(mysql_num_rows($query) > 0)
{
		$i=0;
		echo '<div class="table-responsive ">';
		echo '<table class="table table-bordered table-striped">';


				echo "<tr>";

					while ($i < mysql_num_fields($query))
	{
		$meta = mysql_fetch_field($query, $i);
		echo '<td>' . '<b>' .$meta->name .'</b>'. '</td>';
		$i++;
	}
	echo '<td>' . '<b>' . "Actions" . '</b>' . '</td>';

				echo "</tr>";


while ($row = mysql_fetch_row($query))
	{
		echo '<tr>';
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo '<td>'. $c_row . '</td>';
			next($row);
			$y++;
		}
		echo '<td><center>' . "<a href='info.php?info_key=$row[0]' target='_blank'><span class='glyphicon glyphicon-info-sign'>
				</src></a> <a href='edit.php?edit_key=$row[0]'><span class='glyphicon glyphicon-edit'></src>
				</a><a href='delete.php?delete_key=$row[0]' data-confirm='Are you sure you want to delete?');'><span class='glyphicon glyphicon-remove'></src></a>".'</td></center>';
		echo '</tr>';

	}


echo "</table>";
}
else
	{
		echo "<h3><center>RECORD NOT FOUND</center></h3><br>";

	}
	?>

		</div>
</body>
<script type="text/javascript">


		$(document).ready(function() {
	$('a[data-confirm]').click(function(ev) {
		var href = $(this).attr('href');
		if (!$('#dataConfirmModal').length) {
			$('body').append('<div id="dataConfirmModal" class="modal fade" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Please Confirm</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button><a class="btn btn-primary" id="dataConfirmOK">OK</a></div></div></div></div>');
		}
		$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
		$('#dataConfirmOK').attr('href', href);
		$('#dataConfirmModal').modal({show:true});
		return false;
	});
});


</script>
</html>
