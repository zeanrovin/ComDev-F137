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
		<link rel="stylesheet" type="text/css" href="home.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
<?php

$connection = @mysql_connect('localhost','root');
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('f137');
$studentno = mysql_real_escape_string($_POST['studentno']);
$firstname = mysql_real_escape_string($_POST['firstname']);
$lastname = mysql_real_escape_string($_POST['lastname']);
$age = mysql_real_escape_string($_POST['age']);
$gender = mysql_real_escape_string($_POST['Gender']);
$middlename = mysql_real_escape_string($_POST['middlename']);
$religion = mysql_real_escape_string($_POST['Religion']);
$address1 = mysql_real_escape_string($_POST['address1']);


$address2 = mysql_real_escape_string($_POST['address2']);
$birthday = mysql_real_escape_string($_POST['date']);
$birthday = date("Y-m-d", strtotime($birthday));
$schoolyear = mysql_real_escape_string($_POST['schoolyear']);



$query1 = "INSERT INTO `student_profile`  (`firstname`, `lastname`, `age`, `gender`, `religion`, `middlename`, `birthday`, `address1`,`address2`,`schoolyear`) VALUES ('$firstname', '$lastname', '$age', '$gender', '$religion', '$middlename', '$birthday', '$address1','$address2','$schoolyear')";

$query2 = "SELECT `studentid` FROM `student_profile` WHERE `firstname` LIKE '%$firstname%' AND `lastname` LIKE '%$lastname%' AND `middlename` LIKE '%$middlename%'" ;


$result1 = mysql_query($query1);

$result2 = mysql_query($query2);

$d = mysql_fetch_assoc($result2);

$stud = $d['studentid'];

$query3 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Fil', '7')";

$result3 = mysql_query($query3);

$query4 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Eng', '7')";

$result4 = mysql_query($query4);

$query5 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Math', '7')";

$result5 = mysql_query($query5);

$query6 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'AP', '7')";

$result6 = mysql_query($query6);

$query7 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'ESP', '7')";

$result7 = mysql_query($query7);

$query8 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'TLE', '7')";

$result8 = mysql_query($query8);

$query9 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'MAPEH', '7')";

$result9 = mysql_query($query9);

$query10 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Music', '7')";

$result10 = mysql_query($query10);

$query11 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'ART', '7')";

$result11 = mysql_query($query11);

$query12 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'PE', '7')";

$result12 = mysql_query($query12);

$query13 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'H', '7')";

$result13 = mysql_query($query13);

$query14 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'sci', '7')";

$result14 = mysql_query($query14);

$query15 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Fil', '8')";

$result15 = mysql_query($query15);

$query16 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Eng', '8')";

$result16 = mysql_query($query16);

$query17= "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Math', '8')";

$result17 = mysql_query($query17);

$query18 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'AP', '8')";

$result18 = mysql_query($query18);

$query19= "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'ESP', '8')";

$result19 = mysql_query($query19);

$query20 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'TLE', '8')";

$result20 = mysql_query($query20);

$query21 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'MAPEH', '8')";

$resul21 = mysql_query($query21);

$query22 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Music', '8')";

$result22 = mysql_query($query22);

$query23 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'ART', '8')";

$result23 = mysql_query($query23);

$query24 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'PE', '8')";

$result24 = mysql_query($query24);

$query25 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'H', '8')";

$result25 = mysql_query($query25);

$query26 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'sci', '8')";

$result26 = mysql_query($query26);

$query27 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Fil', '9')";

$result27 = mysql_query($query27);

$query28 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Eng', '9')";

$result28 = mysql_query($query28);

$query29= "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Math', '9')";

$result29 = mysql_query($query29);

$query30 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'AP', '9')";

$result30 = mysql_query($query30);

$query31 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'ESP', '9')";

$result31 = mysql_query($query31);

$query32 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'TLE', '9')";

$result32 = mysql_query($query32);

$query33 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'MAPEH', '9')";

$resul33 = mysql_query($query33);

$query34 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Music', '9')";

$result34 = mysql_query($query34);

$query35 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'ART', '9')";

$result35 = mysql_query($query35);

$query36 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'PE', '9')";

$result36 = mysql_query($query36);

$query37 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'H', '9')";

$result37 = mysql_query($query37);

$query38 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'sci', '9')";

$result38 = mysql_query($query26);

$query39 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Fil', '10')";

$result39 = mysql_query($query39);

$query40 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Eng', '10')";

$result40 = mysql_query($query40);

$query41= "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Math', '10')";

$result41 = mysql_query($query41);

$query42 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'AP', '10')";

$result42 = mysql_query($query42);

$query43 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'ESP', '10')";

$result43 = mysql_query($query43);

$query44 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'TLE', '10')";

$result44 = mysql_query($query44);

$query45 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'MAPEH', '10')";

$result45 = mysql_query($query45);

$query46 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Music', '10')";

$result46 = mysql_query($query46);

$query47 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'ART', '10')";

$result47 = mysql_query($query47);

$query48 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'PE', '10')";

$result48 = mysql_query($query48);

$query49 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'H', '10')";

$result49 = mysql_query($query49);

$query50 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'sci', '10')";

$result50 = mysql_query($query50);

$query51 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Fil', '11')";

$result51 = mysql_query($query51);

$query52 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Eng', '11')";

$result52 = mysql_query($query52);

$query53= "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Math', '11')";

$result53 = mysql_query($query53);

$query54 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'AP', '11')";

$result54 = mysql_query($query54);

$query55 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'ESP', '11')";

$result55 = mysql_query($query55);

$query56 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'TLE', '11')";

$result56 = mysql_query($query56);

$query57 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'MAPEH', '11')";

$result57 = mysql_query($query57);

$query58 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Music', '11')";

$result58 = mysql_query($query58);

$query59 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'ART', '11')";

$result59 = mysql_query($query59);

$query60 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'PE', '11')";

$result60 = mysql_query($query60);

$query61 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'H', '11')";

$result61 = mysql_query($query61);

$query62 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'sci', '11')";

$result62 = mysql_query($query62);

$query63 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Fil', '12')";

$result63 = mysql_query($query63);

$query64 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Eng', '12')";

$result64 = mysql_query($query64);

$query65= "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Math', '12')";

$result65 = mysql_query($query65);

$query66 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'AP', '12')";

$result66 = mysql_query($query66);

$query67 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'ESP', '12')";

$result67 = mysql_query($query67);

$query68 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'TLE', '12')";

$result68 = mysql_query($query68);

$query69 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'MAPEH', '12')";

$result69 = mysql_query($query69);

$query70 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'Music', '12')";

$result70 = mysql_query($query70);

$query71 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'ART', '12')";

$result71 = mysql_query($query71);

$query72 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'PE', '12')";

$result72 = mysql_query($query72);

$query73 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'H', '12')";

$result73 = mysql_query($query73);

$query74 = "INSERT INTO `grades`(`studentid`, `subject`, `grade` ) VALUES ('$stud', 'sci', '12')";

$result74 = mysql_query($query74);





mysql_close($connection);

?>

<div class="container">

		<div class="jumbotron">
		<h1>Success!</h1>
		<p>Adding information of a student to the directory of Montalban National High School is successful.<br/>
		<br/>Click the button to go back to the Homepage. </p>
		<div class="col-lg-5">
			<form action ="index.php" method="get" id="form1">
			<button type="submit" form="form1" class="btn btn-primary btn-block" value="Submit">Return</button>
			</form>
		</div
		</div>
	</div>

</body>
</html>
