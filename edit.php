<?php
include('session.php');

$connection = @mysql_connect('localhost','root');
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('f137');
$edit_key = $_GET['edit_key'];



?>


<!DOCTYPE html>


	<html>
	<head>
		<title>Montalban National High School- F137 System</title>
		<link rel="shortcut icon" href="image/ghead.png" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/home.css">

		<script src="script/jquery-1.10.2.min.js"></script>
    <script src="script/jquery-ui.js"></script>
    <script src="script/bootstrap.min.js"></script>


    <script src="script/pace.min.js"></script>

    <script src="script/responsive-tabs.js"></script>


    <script src="script/index.js"></script>

    <!--CORE JAVASCRIPT-->
    <script src="script/main.js"></script>
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

                                 <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab-1" data-toggle="tab">Grade VII</a></li>

                                    <li><a href="#tab-3" data-toggle="tab">Grade VIII</a></li>
                                    <li><a href="#tab-4" data-toggle="tab">Grade IX</a></li>
                                    <li><a href="#tab-5" data-toggle="tab">Grade X</a></li>
                                    <li><a href="#tab-6" data-toggle="tab">Grade XI</a></li>
                                    <li><a href="#tab-7" data-toggle="tab">Grade XII</a></li>
                                </ul>
                                <div id="generalTabContent" class="tab-content">
                                    <div id="tab-1" class="tab-pane fade in active">
                                        <iframe src="form137.php?edit_key=<?php echo $edit_key;?>&grade=7" frameborder="0" style="overflow: hidden; height: 100%;
        										width: 100%; position: absolute;" height="100%" width="100%"></iframe>
                                    </div>
                                    <div id="tab-3" class="tab-pane fade in">

                                        <iframe src="form137.php?edit_key=<?php echo $edit_key;?>&grade=8" frameborder="0" style="overflow: hidden; height: 100%;
        										width: 100%; position: absolute;" height="100%" width="100%"></iframe>

                                    </div>
                                    <div id="tab-4" class="tab-pane fade in">

                                        <iframe src="form137.php?edit_key=<?php echo $edit_key;?>&grade=9" frameborder="0" style="overflow: hidden; height: 100%;
        										width: 100%; position: absolute;" height="100%" width="100%"></iframe>

                                    </div>
                                    <div id="tab-5" class="tab-pane fade in">

                                        <iframe src="form137.php?edit_key=<?php echo $edit_key;?>&grade=10" frameborder="0" style="overflow: hidden; height: 100%;
        										width: 100%; position: absolute;" height="100%" width="100%"></iframe>

                                    </div>
                                    <div id="tab-6" class="tab-pane fade in">

                                        <iframe src="form137.php?edit_key=<?php echo $edit_key;?>&grade=11" frameborder="0" style="overflow: hidden; height: 100%;
        										width: 100%; position: absolute;" height="100%" width="100%"></iframe>

                                    </div>
                                    <div id="tab-7" class="tab-pane fade in">

                                        <iframe src="form137.php?edit_key=<?php echo $edit_key;?>&grade=12" frameborder="0" style="overflow: hidden; height: 100%;
        										width: 100%; position: absolute;" height="100%" width="100%"></iframe>

                                    </div>
                                </div>

</body>
<script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>

</html>
