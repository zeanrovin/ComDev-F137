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
	<table class="t1">
	<th></th>
	<tbody>
	<tr>
		<td>FIRST NAME</td>
		<td><b><?php echo $d['firstname']?></b></td>
		<td>LAST NAME</td>
		<td><b><?php echo $d['lastname']?></b></td>
		<td>MIDDLE NAME</td>
		<td><b><?php echo $d['middlename']?></b></td>
	</tr>
	</tbody>
	</table>
	<table class="t1">
	<tbody>
	<tr>
		<input type="hidden" placeholder="" value = "<?php echo $edit_key?>"class="form-control" name="id" style="width: 265px;">
		<td>BIRTHDAY</td>
		<td><b><?php echo $d['birthday']?></b></td>
		<td>AGE</td>
		<td><b><?php echo $d['age']?></b></td>
		<td>SEX</td>
		<td><b><?php echo $d['gender']?></b></td>
	</tbody>
	</table>
	<table class="t1">
	<tbody>
	<tr>
		<td>CURRICULUM</td>
		<td><b>K-12</b></td>
		<td>SCHOOL YEAR</td>
		<td><b><?php echo $d['schoolyear']?></b></td>

	</tbody>
	</table>

	<table class="t1">
	<tbody>
	<tr>
		<td>GRADE</td>
		<td><b><?php echo $grade;?>"</b></td>
		<td>SECTION</td>
		<td><b><?php echo $d['section']?></b></td>

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
				<td><?php echo $fil1; ?></td>
				<td><?php echo $fil2;?></td>
				<td><?php echo $fil3;?></td>
				<td><?php echo $fil4;?></td>
				<td><?php echo $filfg;?></td>
				<td><?php echo $filr;?></td>
			</tr>
			<tr>
				<td>English</td>
				<td><?php echo $eng1; ?></td>
				<td><?php echo $eng2; ?></td>
				<td><?php echo $eng3; ?></td>
				<td><?php echo $eng4; ?></td>
				<td><?php echo $engfg; ?></td>
				<td><?php echo $engr; ?></td>
			</tr>
			<tr>
				<td>Mathematics</td>
				<td><?php echo $math1; ?></td>
				<td><?php echo $math2; ?></td>
				<td><?php echo $math3; ?></td>
				<td><?php echo $math4;?></td>
				<td><?php echo $mathfg;?></td>
				<td><?php echo $mathr; ?></td>
			</tr>
			<tr>
				<td>Science</td>
				<td><?php echo $sci1; ?></td>
				<td><?php echo $sci2; ?></td>
				<td><?php echo $sci3; ?></td>
				<td><?php echo $sci4; ?></td>
				<td><?php echo $scifg; ?></td>
				<td><?php echo $scir; ?></td>
			</tr>
			<tr>
				<td>Araling Panlipunan (AP)</td>
				<td><?php echo $ap1; ?></td>
				<td><?php echo $ap2; ?></td>
				<td><?php echo $ap3; ?></td>
				<td><?php echo $ap4; ?></td>
				<td><?php echo $apfg; ?></td>
				<td><?php echo $apr; ?></td>
			</tr>
			<tr>
				<td>Edukasyon sa Pagpakatao (EsP)</td>
				<td>"<?php echo $esp1; ?></td>
				<td><?php echo $esp2; ?></td>
				<td><?php echo $esp3; ?></td>
				<td><?php echo $esp4; ?></td>
				<td><?php echo $espfg; ?></td>
				<td><?php echo $espr; ?></td>
			</tr>
			<tr>
				<td>Technology and Livelihood Educations (TLE)</td>
				<td><?php echo $tle1; ?></td>
				<td><?php echo $tle2; ?></td>
				<td><?php echo $tle3; ?></td>
				<td><?php echo $tle4; ?></td>
				<td><?php echo $tlefg; ?></td>
				<td><?php echo $tler; ?></td>
			</tr>

			<tr>
				<td>MAPEH</td>
				<td><?php echo $mapeh1; ?></td>
				<td><?php echo $mapeh2; ?></td>
				<td><?php echo $mapeh3; ?></td>
				<td><?php echo $mapeh4; ?></td>
				<td><?php echo $mapehfg; ?></td>
				<td><?php echo $mapehr; ?></td>
			</tr>
			<tr>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspMusic</td>
				<td><?php echo $mus1; ?></td>
				<td><?php echo $mus2; ?></td>
				<td><?php echo $mus3; ?></td>
				<td><?php echo $mus4; ?></td>
				<td><?php echo $musfg; ?></td>
				<td><?php echo $musr; ?></td>
			</tr>
			<tr>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspArts</td>
				<td><?php echo $arts1; ?></td>
				<td><?php echo $arts2; ?></td>
				<td><?php echo $arts3; ?></td>
				<td><?php echo $arts4; ?></td>
				<td><?php echo $artsfg; ?></td>
				<td><?php echo $artsr; ?></td>
			</tr>
			<tr>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspPhysical Education</td>
				<td><?php echo $pe1; ?></td>
				<td><?php echo $pe2; ?></td>
				<td><?php echo $pe3; ?></td>
				<td><?php echo $pe4; ?></td>
				<td><?php echo $pefg; ?></td>
				<td><?php echo $per; ?></td>
			</tr>
			<tr>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspHealth</td>
				<td><?php echo $hth1; ?></td>
				<td><?php echo $hth2; ?></td>
				<td><?php echo $hth3; ?></td>
				<td><?php echo $hth4; ?></td>
				<td><?php echo $hthfg; ?></td>
				<td><?php echo $hthr; ?></td>
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
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
			<td>No. of days present</td>

				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			</tr>
			<tr>
			<td>No. of days absent</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<br>

	<table class="t1">
	<th></th>
	<tbody>

	<table class="t1">
	<tbody>
	<tr>
		<td>Date</td>
		<td></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>

	</tbody>
	</table>
	<br>
	<br>

	<table class="t1">
	<tbody>
	<tr>
		<td></td>
		<td></td>
		</tr>
	<tr>

	</tbody>
	</table>
	<br>
	<input type="Submit" value="PRINT" class="btn btn-primary">

	</form>
	</center>




	</div>





</body>
</html>
