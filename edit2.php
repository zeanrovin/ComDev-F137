<?php

include('session.php');

$connection = @mysql_connect('localhost','root');
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('f137');

$studentno = mysql_real_escape_string($_POST['id']);
$firstname = mysql_real_escape_string($_POST['firstname']);
$middlename = mysql_real_escape_string($_POST['middle']);
$lastname = mysql_real_escape_string($_POST['lastname']);
$age = mysql_real_escape_string($_POST['age']);
$gender = mysql_real_escape_string($_POST['gender']);
$grade = mysql_real_escape_string($_POST['grade']);
$section = mysql_real_escape_string($_POST['section']);
$schoolyear = mysql_real_escape_string($_POST['schoolyear']);

$fil1 = mysql_real_escape_string($_POST['fil1']);
$fil2 = mysql_real_escape_string($_POST['fil2']);
$fil3 = mysql_real_escape_string($_POST['fil3']);
$fil4 = mysql_real_escape_string($_POST['fil4']);
$filfg = mysql_real_escape_string($_POST['filfg']);
$filr = mysql_real_escape_string($_POST['filr']);

$eng1 = mysql_real_escape_string($_POST['eng1']);
$eng2 = mysql_real_escape_string($_POST['eng2']);
$eng3 = mysql_real_escape_string($_POST['eng3']);
$eng4 = mysql_real_escape_string($_POST['eng4']);
$engfg = mysql_real_escape_string($_POST['engfg']);
$engr = mysql_real_escape_string($_POST['engr']);

$math1 = mysql_real_escape_string($_POST['math1']);
$math2 = mysql_real_escape_string($_POST['math2']);
$math3 = mysql_real_escape_string($_POST['math3']);
$math4 = mysql_real_escape_string($_POST['math4']);
$mathfg = mysql_real_escape_string($_POST['mathfg']);
$mathr = mysql_real_escape_string($_POST['mathr']);

$sci1 = mysql_real_escape_string($_POST['sci1']);
$sci2 = mysql_real_escape_string($_POST['sci2']);
$sci3 = mysql_real_escape_string($_POST['sci3']);
$sci4 = mysql_real_escape_string($_POST['sci4']);
$scifg = mysql_real_escape_string($_POST['scifg']);
$scir = mysql_real_escape_string($_POST['scir']);

$ap1 = mysql_real_escape_string($_POST['ap1']);
$ap2 = mysql_real_escape_string($_POST['ap2']);
$ap3 = mysql_real_escape_string($_POST['ap3']);
$ap4 = mysql_real_escape_string($_POST['ap4']);
$apfg = mysql_real_escape_string($_POST['apfg']);
$apr = mysql_real_escape_string($_POST['apr']);

$esp1 = mysql_real_escape_string($_POST['esp1']);
$esp2 = mysql_real_escape_string($_POST['esp2']);
$esp3 = mysql_real_escape_string($_POST['esp3']);
$esp4 = mysql_real_escape_string($_POST['esp4']);
$espfg = mysql_real_escape_string($_POST['espfg']);
$espr = mysql_real_escape_string($_POST['espr']);

$tle1 = mysql_real_escape_string($_POST['tle1']);
$tle2 = mysql_real_escape_string($_POST['tle2']);
$tle3 = mysql_real_escape_string($_POST['tle3']);
$tle4 = mysql_real_escape_string($_POST['tle4']);
$tlefg = mysql_real_escape_string($_POST['tlefg']);
$tler = mysql_real_escape_string($_POST['tler']);

$mapeh1 = mysql_real_escape_string($_POST['mapeh1']);
$mapeh2 = mysql_real_escape_string($_POST['mapeh2']);
$mapeh3 = mysql_real_escape_string($_POST['mapeh3']);
$mapeh4 = mysql_real_escape_string($_POST['mapeh4']);
$mapehfg = mysql_real_escape_string($_POST['mapehfg']);
$mapehr = mysql_real_escape_string($_POST['mapehr']);

$mus1 = mysql_real_escape_string($_POST['mus1']);
$mus2 = mysql_real_escape_string($_POST['mus2']);
$mus3= mysql_real_escape_string($_POST['mus3']);
$mus4 = mysql_real_escape_string($_POST['mus4']);
$musfg = mysql_real_escape_string($_POST['musfg']);
$musr = mysql_real_escape_string($_POST['musr']);

$arts1 = mysql_real_escape_string($_POST['arts1']);
$arts2 = mysql_real_escape_string($_POST['arts2']);
$arts3= mysql_real_escape_string($_POST['arts3']);
$arts4 = mysql_real_escape_string($_POST['arts4']);
$artsfg = mysql_real_escape_string($_POST['artsfg']);
$artsr = mysql_real_escape_string($_POST['artsr']);

$pe1 = mysql_real_escape_string($_POST['pe1']);
$pe2 = mysql_real_escape_string($_POST['pe2']);
$pe3= mysql_real_escape_string($_POST['pe3']);
$pe4 = mysql_real_escape_string($_POST['pe4']);
$pefg = mysql_real_escape_string($_POST['pefg']);
$per = mysql_real_escape_string($_POST['per']);

$hth1 = mysql_real_escape_string($_POST['hth1']);
$hth2 = mysql_real_escape_string($_POST['hth2']);
$hth3= mysql_real_escape_string($_POST['hth3']);
$hth4 = mysql_real_escape_string($_POST['hth4']);
$hthfg = mysql_real_escape_string($_POST['hthfg']);
$hthr = mysql_real_escape_string($_POST['hthr']);

$query = "UPDATE `student_profile` SET `firstname`= '$firstname', `lastname`= '$lastname' , `middlename`= '$middlename' , `age`= '$age' , `gender`= '$gender' , `section`= '$section' , `schoolyear`= '$schoolyear' WHERE `studentid` = '$studentno'";
$result = mysql_query($query);

$query2 = "UPDATE `grades` SET `1g`= '$fil1', `2g`= '$fil2' , `3g`= '$fil3' , `4g`= '$fil4' , `fg`= '$filfg' , `r`= '$filr' WHERE `studentid` = '$studentno' AND `subject` = 'Fil' AND `grade` = '$grade'";
$result2 = mysql_query($query2);

$query3 = "UPDATE `grades` SET `1g`= '$eng1', `2g`= '$eng2' , `3g`= '$eng3' , `4g`= '$eng4' , `fg`= '$engfg' , `r`= '$engr' WHERE `studentid` = '$studentno' AND `subject` = 'Eng' AND `grade` = '$grade'";
$result3 = mysql_query($query3);

$query4 = "UPDATE `grades` SET `1g`= '$math1', `2g`= '$math2' , `3g`= '$math3' , `4g`= '$math4' , `fg`= '$mathfg' , `r`= '$mathr' WHERE `studentid` = '$studentno' AND `subject` = 'Math' AND `grade` = '$grade'";
$result4 = mysql_query($query4);

$query5 = "UPDATE `grades` SET `1g`= '$sci1', `2g`= '$sci2' , `3g`= '$sci3' , `4g`= '$sci4' , `fg`= '$scifg' , `r`= '$scir' WHERE `studentid` = '$studentno' AND `subject` = 'sci' AND `grade` = '$grade'";
$result5 = mysql_query($query5);

$query6 = "UPDATE `grades` SET `1g`= '$ap1', `2g`= '$ap2' , `3g`= '$ap3' , `4g`= '$ap4' , `fg`= '$apfg' , `r`= '$apr' WHERE `studentid` = '$studentno' AND `subject` = 'AP' AND `grade` = '$grade'";
$result6 = mysql_query($query6);

$query7 = "UPDATE `grades` SET `1g`= '$esp1', `2g`= '$esp2' , `3g`= '$esp3' , `4g`= '$esp4' , `fg`= '$espfg' , `r`= '$espr' WHERE `studentid` = '$studentno' AND `subject` = 'ESP' AND `grade` = '$grade'";
$result7 = mysql_query($query7);

$query8 = "UPDATE `grades` SET `1g`= '$tle1', `2g`= '$tle2' , `3g`= '$tle3' , `4g`= '$tle4' , `fg`= '$tlefg' , `r`= '$tler' WHERE `studentid` = '$studentno' AND `subject` = 'TLE' AND `grade` = '$grade'";
$result8 = mysql_query($query8);

$query9 = "UPDATE `grades` SET `1g`= '$mapeh1', `2g`= '$mapeh2' , `3g`= '$mapeh3' , `4g`= '$mapeh4' , `fg`= '$mapehfg' , `r`= '$mapehr' WHERE `studentid` = '$studentno' AND `subject` = 'MAPEH' AND `grade` = '$grade'";
$result9 = mysql_query($query9);

$query10 = "UPDATE `grades` SET `1g`= '$mus1', `2g`= '$mus2' , `3g`= '$mus3' , `4g`= '$mus4' , `fg`= '$musfg' , `r`= '$musr' WHERE `studentid` = '$studentno' AND `subject` = 'Music' AND `grade` = '$grade'";
$result10 = mysql_query($query10);

$query11 = "UPDATE `grades` SET `1g`= '$arts1', `2g`= '$arts2' , `3g`= '$arts3' , `4g`= '$arts4' , `fg`= '$artsfg' , `r`= '$artsr' WHERE `studentid` = '$studentno' AND `subject` = 'ART' AND `grade` = '$grade'";
$result11 = mysql_query($query11);

$query12 = "UPDATE `grades` SET `1g`= '$pe1', `2g`= '$pe2' , `3g`= '$pe3' , `4g`= '$pe4' , `fg`= '$pefg' , `r`= '$per' WHERE `studentid` = '$studentno' AND `subject` = 'PE' AND `grade` = '$grade'";
$result12 = mysql_query($query12);

$query13 = "UPDATE `grades` SET `1g`= '$hth1', `2g`= '$hth2' , `3g`= '$hth3' , `4g`= '$pe4' , `fg`= 'hthfg' , `r`= '$hthr' WHERE `studentid` = '$studentno' AND `subject` = 'H' AND `grade` = '$grade'";
$result13 = mysql_query($query13);
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


	<div class="container">

		<div class="jumbotron">
		<h1>Success!</h1>
		<p>Editing information of a student to the directory of Montalban National High School is successful.<br/>
		<br/>Click the button to go back. </p>
		<div class="col-lg-5">
			<form action ="index.php" method="get" id="form1">
			<button type="submit" form="form1" class="btn btn-primary btn-block" value="Submit">Return</button>
			</form>
		</div
		</div>
	</div>

</body>
</html>
