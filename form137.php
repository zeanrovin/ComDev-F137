<?php
include('session.php');

$connection = @mysql_connect('localhost','root');
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('f137');
$edit_key = $_GET['edit_key'];
$grade = $_GET['grade'];

$query = "SELECT * FROM student_profile WHERE studentid = $edit_key";
$result = mysql_query($query);
$d = mysql_fetch_assoc($result);

$query1 = "SELECT * FROM grades WHERE studentid = $edit_key AND grade = $grade";
$result1 = mysql_query($query1);
$d1 = mysql_fetch_assoc($result1);


$query3 = "SELECT * FROM `grades` WHERE `subject` = 'Fil' AND `studentid` = '$edit_key' AND `grade` = '$grade'";
$result3 = mysql_query($query3);
$d3 = mysql_fetch_assoc($result3);

$query4 = "SELECT * FROM `grades` WHERE `subject` = 'Eng' AND `studentid` = '$edit_key' AND `grade` = '$grade'";
$result4 = mysql_query($query4);
$d4 = mysql_fetch_assoc($result4);

$query5 = "SELECT * FROM `grades` WHERE `subject` = 'Math' AND `studentid` = '$edit_key' AND `grade` = '$grade'";
$result5 = mysql_query($query5);
$d5 = mysql_fetch_assoc($result5);

$query6 = "SELECT * FROM `grades` WHERE `subject` = 'AP' AND `studentid` = '$edit_key' AND `grade` = '$grade'";
$result6 = mysql_query($query6);
$d6 = mysql_fetch_assoc($result6);

$query7 = "SELECT * FROM `grades` WHERE `subject` = 'ESP' AND `studentid` = '$edit_key' AND `grade` = '$grade'";
$result7 = mysql_query($query7);
$d7 = mysql_fetch_assoc($result7);

$query14 = "SELECT * FROM `grades` WHERE `subject` = 'sci' AND `studentid` = '$edit_key' AND `grade` = '$grade'";
$result14 = mysql_query($query14);
$d14 = mysql_fetch_assoc($result14);

$query8 = "SELECT * FROM `grades` WHERE `subject` = 'TLE' AND `studentid` = '$edit_key' AND `grade` = '$grade'";
$result8 = mysql_query($query8);
$d8 = mysql_fetch_assoc($result8);

$query9 = "SELECT * FROM `grades` WHERE `subject` = 'MAPEH' AND `studentid` = '$edit_key' AND `grade` = '$grade'";
$result9 = mysql_query($query9);
$d9 = mysql_fetch_assoc($result9);

$query10 = "SELECT * FROM`grades` WHERE `subject` = 'Music' AND `studentid` = '$edit_key' AND `grade` = '$grade'";
$result10 = mysql_query($query10);
$d10 = mysql_fetch_assoc($result10);

$query11 = "SELECT * FROM `grades` WHERE `subject` = 'ART' AND `studentid` = '$edit_key' AND `grade` = '$grade'";
$result11 = mysql_query($query11);
$d11 = mysql_fetch_assoc($result11);
$query12 = "SELECT * FROM `grades` WHERE `subject` = 'PE' AND `studentid` = '$edit_key' AND `grade` = '$grade'";
$result12 = mysql_query($query12);
$d12 = mysql_fetch_assoc($result12);

$query13 = "SELECT * FROM `grades` WHERE `subject` = 'H' AND `studentid` = '$edit_key' AND `grade` = '$grade'";
$result13 = mysql_query($query13);
$d13 = mysql_fetch_assoc($result13);

$fil1 = $d3['1g'];
$fil2 = $d3['2g'];
$fil3 = $d3['3g'];
$fil4 = $d3['4g'];
$filfg = $d3['fg'];
$filr = $d3['r'];

$eng1 = $d4['1g'];
$eng2 = $d4['2g'];
$eng3 = $d4['3g'];
$eng4 = $d4['4g'];
$engfg = $d4['fg'];
$engr = $d4['r'];

$math1 = $d5['1g'];
$math2 = $d5['2g'];
$math3 = $d5['3g'];
$math4 = $d5['4g'];
$mathfg = $d5['fg'];
$mathr = $d5['r'];

$ap1 = $d6['1g'];
$ap2 = $d6['2g'];
$ap3 = $d6['3g'];
$ap4 = $d6['4g'];
$apfg = $d6['fg'];
$apr = $d6['r'];

$sci1 = $d14['1g'];
$sci2 = $d14['2g'];
$sci3 = $d14['3g'];
$sci4 = $d14['4g'];
$scifg = $d14['fg'];
$scir = $d14['r'];

$esp1 = $d7['1g'];
$esp2 = $d7['2g'];
$esp3 = $d7['3g'];
$esp4 = $d7['4g'];
$espfg = $d7['fg'];
$espr = $d7['r'];

$tle1 = $d8['1g'];
$tle2 = $d8['2g'];
$tle3 = $d8['3g'];
$tle4 = $d8['4g'];
$tlefg = $d8['fg'];
$tler = $d8['r'];

$mapeh1 = $d9['1g'];
$mapeh2 = $d9['2g'];
$mapeh3 = $d9['3g'];
$mapeh4 = $d9['4g'];
$mapehfg = $d9['fg'];
$mapehr = $d9['r'];

$mus1 = $d10['1g'];
$mus2 = $d10['2g'];
$mus3 = $d10['3g'];
$mus4 = $d10['4g'];
$musfg = $d10['fg'];
$musr = $d10['r'];

$arts1 = $d11['1g'];
$arts2 = $d11['2g'];
$arts3 = $d11['3g'];
$arts4 = $d11['4g'];
$artsfg = $d11['fg'];
$artsr = $d11['r'];

$pe1 = $d12['1g'];
$pe2 = $d12['2g'];
$pe3 = $d12['3g'];
$pe4 = $d12['4g'];
$pefg = $d12['fg'];
$per = $d12['r'];

$hth1 = $d13['1g'];
$hth2 = $d13['2g'];
$hth3 = $d13['3g'];
$hth4 = $d13['4g'];
$hthfg = $d13['fg'];
$hthr = $d13['r'];

mysql_close($connection);

?>


<html>
	<head>
		<title>Student's Profile</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="ghead.png" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="general.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style>
		table, th, td {
		    border: 1px solid black;
		    border-collapse: collapse;
		}
		th, td {
		    padding: 5px;
		    text-align: left;
		}
		</style>
	</head>
<body>


	<div class="page-header">
		<h4><b><center>Republic of the Philippines</center></b></h4>
		<h3><center>DEPARTMENT OF EDUCATION</center></h3>
		<h4><center>Region IV-A</center></h4>
		<h4><center>Division of Rizal</center></h4>
	</div>
	<h1><CENTER>MONALBAN HEIGHTS NATIONAL HIGH SCHOOL</CENTER></h1>
	<h3><center>Rodriguez, Rizal</center></h3>
	</div>

	<center>
	<form name="input" action="edit2.php?" method="post">
	<table class="t1">
	<th></th>
	<tbody>
	<tr>
		<td>FIRST NAME</td>
		<td><input type="text" placeholder="" value = "<?php echo $d['firstname']?>"class="form-control" name="firstname" style="width: 135px;" required></td>
		<td>LAST NAME</td>
		<td><input type="text" placeholder="" value = "<?php echo $d['lastname']?>"class="form-control" name="lastname" style="width: 135px;" required></td>
		<td>MIDDLE NAME</td>
		<td><input type="text" placeholder="" value = "<?php echo $d['middlename']?>"class="form-control" name="middle" style="width: 135px;" required></td>
	</tr>
	</tbody>
	</table>
	<table class="t1">
	<tbody>
	<tr>
		<input type="hidden" placeholder="" value = "<?php echo $edit_key?>"class="form-control" name="id" style="width: 265px;"
		<td>BIRTHDAY</td>
		<td><input type="text" placeholder="" value = "<?php echo $d['birthday']?>"class="form-control" name="date" style="width: 265px;" required ></td>
		<td>AGE</td>
		<td><input type="text" placeholder="" value = "<?php echo $d['age']?>"class="form-control" name="age" style="width: 150px;"required></td>
		<td>SEX</td>
		<td><input type="text" placeholder="" value = "<?php echo $d['gender']?>"class="form-control" name="gender" style="width: 150px;" required></td>
	</tbody>
	</table>
	<table class="t1">
	<tbody>
	<tr>
		<td>CURRICULUM</td>
		<td><input type="text" placeholder="" value = "K-12 "class="form-control" name="" style="width: 255px;" readonly="" ></td>
		<td>SCHOOL YEAR</td>
		<td><input type="text" placeholder="" class="form-control" value = "<?php echo $d['schoolyear']?>" name="schoolyear" style="width: 255px;" required ></td>

	</tbody>
	</table>

	<table class="t1">
	<tbody>
	<tr>
		<td>GRADE</td>
		<td><input type="text" placeholder="" class="form-control" value="<?php echo $grade;?>"name="grade" style="width: 305px;" readonly ></td>
		<td>SECTION</td>
		<td><input type="text" placeholder="" value = "<?php echo $d['section']?>"c class="form-control" name="section" style="width: 305px;" required></td>

	</tbody>
	</table>

	</center>
	<hr>

	<br>


	<div>
		<center><table>
			<tr>
				<th rowspan='2'>Learning Areas</th>
				<th colspan='4'>QUARTER</th>
				<th rowspan='2'>FINAL <br>GRADE</th>
				<th rowspan='2'>Remarks</th>

			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>

			</tr>
			<tr>
				<td>Filipino</td>
				<td><input type="text" placeholder="" class="form-control" name="fil1"  value = "<?php echo $fil1; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="fil2" value = "<?php echo $fil2;?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="fil3" value = "<?php echo $fil3;?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="fil4" value = "<?php echo $fil4;?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="filfg" value = "<?php echo $filfg;?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="filr"  value = "<?php echo $filr;?>"style="width: 64px;" ></td>
			</tr>
			<tr>
				<td>English</td>
				<td><input type="text" placeholder="" class="form-control" name="eng1" value = "<?php echo $eng1; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="eng2" value = "<?php echo $eng2; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="eng3" value = "<?php echo $eng3; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="eng4" value = "<?php echo $eng4; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="engfg" value = "<?php echo $engfg; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="engr" value = "<?php echo $engr; ?>"style="width: 64px;" ></td>
			</tr>
			<tr>
				<td>Mathematics</td>
				<td><input type="text" placeholder="" class="form-control" name="math1" value = "<?php echo $math1; ?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="math2" value = "<?php echo $math2; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="math3" value = "<?php echo $math3; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="math4" value = "<?php echo $math4; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="mathfg" value = "<?php echo $mathfg; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="mathr" value = "<?php echo $mathr; ?>"style="width: 64px;" ></td>
			</tr>
			<tr>
				<td>Science</td>
				<td><input type="text" placeholder="" class="form-control" name="sci1" value = "<?php echo $sci1; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="sci2" value = "<?php echo $sci2; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="sci3" value = "<?php echo $sci3; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="sci4" value = "<?php echo $sci4; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="scifg" value = "<?php echo $scifg; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="scir" value = "<?php echo $scir; ?>"style="width: 64px;" ></td>
			</tr>
			<tr>
				<td>Araling Panlipunan (AP)</td>
				<td><input type="text" placeholder="" class="form-control" name="ap1" value = "<?php echo $ap1; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="ap2" value = "<?php echo $ap2; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="ap3" value = "<?php echo $ap3; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="ap4" value = "<?php echo $ap4; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="apfg" value = "<?php echo $apfg; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="apr" value = "<?php echo $apr; ?>"style="width: 64px;" ></td>
			</tr>
			<tr>
				<td>Edukasyon sa Pagpakatao (EsP)</td>
				<td><input type="text" placeholder="" class="form-control" name="esp1" value = "<?php echo $esp1; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="esp2" value = "<?php echo $esp2; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="esp3" value = "<?php echo $esp3; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="esp4" value = "<?php echo $esp4; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="espfg" value = "<?php echo $espfg; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="espr" value = "<?php echo $espr; ?>"style="width: 64px;" ></td>
			</tr>
			<tr>
				<td>Technology and Livelihood Educations (TLE)</td>
				<td><input type="text" placeholder="" class="form-control" name="tle1" value = "<?php echo $tle1; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="tle2" value = "<?php echo $tle2; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="tle3" value = "<?php echo $tle3; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="tle4" value = "<?php echo $tle4; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="tlefg" svalue = "<?php echo $tlefg; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="tler" value = "<?php echo $tler; ?>"style="width: 64px;" ></td>
			</tr>

			<tr>
				<td>MAPEH</td>
				<td><input type="text" placeholder="" class="form-control" name="mapeh1" value = "<?php echo $mapeh1; ?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="mapeh2" value = "<?php echo $mapeh2; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="mapeh3" value = "<?php echo $mapeh3; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="mapeh4" value = "<?php echo $mapeh4; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="mapehfg" value = "<?php echo $mapehfg; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="mapehr" value = "<?php echo $mapehr; ?>" style="width: 64px;" ></td>
			</tr>
			<tr>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspMusic</td>
				<td><input type="text" placeholder="" class="form-control" name="mus1" value = "<?php echo $mus1; ?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="mus2" value = "<?php echo $mus2; ?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="mus3" value = "<?php echo $mus3; ?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="mus4" value = "<?php echo $mus4; ?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="musfg" value = "<?php echo $musfg; ?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="musr" value = "<?php echo $musr; ?>" style="width: 64px;" ></td>
			</tr>
			<tr>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspArts</td>
				<td><input type="text" placeholder="" class="form-control" name="arts1" value = "<?php echo $arts1; ?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="arts2" value = "<?php echo $arts2; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="arts3" value = "<?php echo $arts3; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="arts4" value = "<?php echo $arts4; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="artsfg" value = "<?php echo $artsfg; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="artsr" value = "<?php echo $artsr; ?>"style="width: 64px;" ></td>
			</tr>
			<tr>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspPhysical Education</td>
				<td><input type="text" placeholder="" class="form-control" name="pe1" value = "<?php echo $pe1; ?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="pe2" value = "<?php echo $pe2; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="pe3" value = "<?php echo $pe3; ?>" style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="pe4" value = "<?php echo $pe4; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="pefg" value = "<?php echo $pefg; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="per" value = "<?php echo $per; ?>"style="width: 64px;" ></td>
			</tr>
			<tr>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspHealth</td>
				<td><input type="text" placeholder="" class="form-control" name="hth1" value = "<?php echo $hth1; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="hth2" value = "<?php echo $hth2; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="hth3" value = "<?php echo $hth3; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="hth4" value = "<?php echo $hth4; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="hthfg" value = "<?php echo $hthfg; ?>"style="width: 42px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="hthr" value = "<?php echo $hthr; ?>"style="width: 64px;" ></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<th colspan='5' align="right"><p align='right'>GENERAL AVERAGE</p></th>
			<th colspan='1' align="right"></th>
		</table>
		<br>
		<br>
<table class="t1" width="550">
	<tbody>
	<tr><b>
		<td><b>Descriptions</b></td>
		<td><center><b>Grading Scale</b></center></td>
		<td><b><p align='right'>Remarks</b></p></td>
		</b>
	</tr>


	<tr><b>
		<td>Outstanding</td>
		<td><center>90%-100%</center></td>
		<td><p align='right'>Passed</p></td>
		</b>
	</tr>



	<tr><b>
		<td>Very Satisfactory</td>
		<td><center>85%-89%</center></td>
		<td><p align='right'>Passed</p></td>
		</b>
	</tr>

	<tr><b>
		<td>Satisfactory</td>
		<td><p align='center'>80%-84%</p></td>
		<td><p align='right'>Passed</p></td>
		</b>
	</tr>

	<tr><b>
		<td>Fairly Satisfactory</td>
		<td><p align='center'>75%-79%</p></td>
		<td><p align='right'>Passed</p></td>
		</b>
	</tr>

	<tr><b>
		<td>Did Not Meet Expectations</td>
		<td><p align='center'>Below 75%</p></td>
		<td><p align='right'>Failed</p></td>
		</b>
	</tr>
	</tbody>
	</table>
	<br>

	<table>
			<tr>
				<th rowspan='2'>Day</th>
				<th colspan='10'><center>Month</center></th>

			</tr>
			<tr>
				<td>June</td>
				<td>Jul</td>
				<td>Aug</td>
				<td>Sept</td>
				<td>Nov</td>
				<td>Dec</td>
				<td>Jan</td>
				<td>Feb</td>
				<td>Mar</td>
				<td><b>Total</b></td>
			</tr>
			<tr>
				<td>No. of school days</td>
				<td><input type="text" placeholder="" class="form-control" name="sdjune" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="sdjul" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="sdaug" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="sdsept" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="sdoct" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="sdnov" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="sddec" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="sdjan" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="sdfeb" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="sdmarch" style="width: 47px;" ></td>
			</tr>
			<tr>
			<td>No. of days present</td>

				<td><input type="text" placeholder="" class="form-control" name="dpjune" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dpjul" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dpaug" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dpsept" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dpoct" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dpnov" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dpdec" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dpjan" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dpfeb" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dpmarch" style="width: 47px;" ></td>
			</tr>
			</tr>
			<tr>
			<td>No. of days absent</td>
				<td><input type="text" placeholder="" class="form-control" name="dajune" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dajul" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="daaug" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dasept" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="daoct" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="danov" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dadec" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dajan" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="dafeb" style="width: 47px;" ></td>
				<td><input type="text" placeholder="" class="form-control" name="damarch" style="width: 47px;" ></td>
			</tr>
			<br>

	<table class="t1">
	<th></th>
	<tbody>
	<tr>
		<td>To be classified as</td>
		<td><input type="text" placeholder="" class="form-control" name="name" style="width: 390px;" ></td>
	</tr>
	</tbody>
	</table>
	<table class="t1">
	<th></th>
	<tbody>
	<tr>
		<td>Advance subject in</td>
		<td><input type="text" placeholder="" class="form-control" name="name" style="width: 390px;" ></td>
	</tr>
	</tbody>
	</table>
	<table class="t1">
	<th></th>
	<tbody>
	<tr>
		<td>Lack subject in</td>
		<td><input type="text" placeholder="" class="form-control" name="name" style="width: 413px;" ></td>
	</tr>
	</tbody>
	</table>

	<table class="t1">
	<tbody>
	<tr>
		<td>Date</td>
		<td><input type="text" placeholder="" class="form-control" name="date" style="width: 305px;" ></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>

	</tbody>
	</table>
	<br>
	<br>

	<table class="t1">
	<tbody>
	<tr>
		<td><input type="text" placeholder="" class="form-control" name="date" style="width: 305px;" ></td>
		<td><input type="text" placeholder="" class="form-control" name="date" style="width: 305px;" ></td>
		</tr>
	<tr>
		<td><center>Principal</center></td>
		<td><center>Adviser</center></td>
		</tr>
	</tbody>
	</table>
	<br>
	<input type="Submit" value="Add Student" class="btn btn-primary">
				 <input type="RESET" value="Reset" class="btn default">
	</form>
	</center>




	</div>





</body>
</html>
