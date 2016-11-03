<?php
include('session.php');
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
						<li><a href="add1.php"><span class="glyphicon glyphicon-plus-sign"></span> Add</a></li></span> Help</a></li>
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
		
<div class="container">

<!-- ORIGINAL CODE -->
			<form name="input" action="add.php" method="post">
				<div class="col-lg-4">
				<div class="form-group">
					<b>FIRST NAME</b> <BR/><input type ="text"  class="form-control" name="Firstname" required> 
				</div>
				<div class="form-group">
					<b>LAST NAME</b> <BR/><input type ="text"  class="form-control" name="Lastname" required> 
				</div>
				<div class="form-group">
					<b>AGE</b> <BR/><input type ="text"  class="form-control" name="Age" required> 
				</div>
				<div>
					<b>GENDER</b><BR />
					<label class="radio-inline"><input type ="radio" name="Gender" value="Female" required/> Female <br/></label> 
					<label class="radio-inline"><input type ="radio" name="Gender" value="Male"required/> Male <br /> </label><br/><br />
				</div>
				<div class="form-group">
					<b>RELIGION</b> <BR/><input type ="text"  class="form-control" name="Religion"> 
				</div>
				<div>
					<b>CIVIL STATUS</b><BR/>
					<label class="radio-inline"><input type ="radio"  name="Civil_Status" value="Single" required/>Single</label>
					<label class="radio-inline"><input type ="radio"  name="Civil_Status" value="Married" required/> Married <BR/></label>
					<label class="radio-inline"><input type ="radio"  name="Civil_Status" value="Widowed" required/> Widowed</label>
					<label class="radio-inline"><input type ="radio"  name="Civil_Status" value="Divorced" required/> Divorced<br /></label>
				</div>
				<div class="form-group">
				<br><b>CONTACT NUMBER</b> <BR/><input type ="text"  class="form-control" name="Contact_Number">
				</div>
				<div class="form-group">
					<b>E-MAIL ADDRESS</b> <BR/><input type ="email"  class="form-control" name="Email_Address"> 
				</div>
				</div>
				<div class="col-lg-2">
				</div>
				<div class="col-lg-4">
				<div class="form-group">
					<b>POSITION</b> <BR/><input type ="text" class="form-control" name="Position"> 
				</div>
				<div class="form-group">
					<b>YEAR</b> <BR/>
					<select id="ddl1" onchange="configureDropDownLists(this,document.getElementById('ddl2'))" class="form-control" name="Province_Name" required>
						<option value=""></option>
						<option value="Agusan del Norte">Agusan del Norte</option>
						<option value="Agusan del Sur">Agusan del Sur</option>
						<option value="Basilan">Basilan</option>
						<option value="Bukidnon">Bukidnon</option>
						<option value="Camiguin">Camiguin</option>
						<option value="Compostella Valley">Compostella Valley</option>
						<option value="Davao del Norte">Davao del Norte</option>
						<option value="Davao del Sur">Davao del Sur</option>
						<option value="Davao Oriental">Davao Oriental</option>
						<option value="Lanao delNorte">Lanao del Norte</option>
						<option value="Lanao del Sur">Lanao del Sur</option>
						<option value="Maguindanao">Maguindanao</option>
						<option value="Misamis Occidental">Misamis Occidental</option>
						<option value="Misamis Oriental">Misamis Oriental</option>
						<option value="North Cotabato">North Cotabato</option>
						<option value="Sarangani">Sarangani</option>
						<option value="South Cotabato">South Cotabato</option>
						<option value="Sultan Kudarat">Sultan Kudarat</option>
						<option value="Sulu">Sulu</option>
						<option value="Surigao del Norte">Surigao del Norte</option>
						<option value="Surigao del Sur">Surigao del Sur</option>
						<option value="Tawi-Tawi">Tawi-Tawi</option>
						<option value="Zamboanga del Norte">Zamboanga del Norte</option>
						<option value="Zamboanga del Sur">Zamboanga del Sur</option>
						<option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
      </select>
				</div>
				<div class="form-group">
					<b>SECTION</b> <BR/>
					<select id="ddl2" class="form-control" name="LGU" required></select>
				</div>
				<div class="form-group">
					<b>COMMITTEES CHAIRED/MEMBERED</b> <BR/><input type ="text" class="form-control" name="Commitee_ChairedMembered" required> 
				</div>
				<div class="form-group">
					<b>NUMBER OF YEARS IN SERVICE</b> <BR/><input type ="text" class="form-control" name="Number_of_Years_in_Service" required> 
				</div>
				<div class="form-group">
					<b>PRESENT TERM OF SERVICE</b> <BR/><input type ="text" class="form-control" name="Present_Term_of_service" required> 
				</div>
				<div class="form-group">
					<b>GLI TRAINING</b> <BR/><input type ="text" class="form-control" name="GLI_Training" required> 
				</div>
				 <input type="Submit" value="Add Record" class="btn btn-primary">
				 <input type="RESET" value="Reset" class="btn default">
				</div>
			</form>
	</div>
		
</body>
</html>

<script type="text/javascript">

function configureDropDownLists(ddl1,ddl2) 
{
	var Agusan_del_Norte = new Array('Buenavista','Butuan City','Cabadbaran City','Carmen','Jabonga','Kitcharao','Las Nieves','Magallanes','Nasipit','Remedios T. Romualdez','Santiago','Tubay');
	var Agusan_del_Sur = new Array('Bayugan City','Bunawan','Esperanza','La Paz','Loreto','Prosperidad','Rosario','San Francisco','San Luis','Santa Josefa','Sibagat','Talacogon','Trento','Veruela');
	var Basilan = new Array('Akbar','Al-Barka','Hadji Mohammad Ajul','Hadji Muhtamad','Isabela City','Lamitan City','Lantawan','Maluso','Sumisip','Tabuan-Lasa','Tipo-Tipo','Tuburan','Ungkaya Pukan');
	var Bukidnon = new Array('Baungon','Cabanglasan','Damulog','Dangcagan','Don Carlos','Impasugong','Kadingilan','Kalilangan','Kibawe','Kitaotao','Lantapan','Libona','Malaybalay City','Malitbog','Manolo Fortich','Maramag','Pangantucan','Quezon','San Fernando','Sumilao','Talakag','Valencia City');
	var Camiguin = new Array('Catarman','Guinsiliban','Mahinog','Mambajao','Sagay');
	var Compostella_Valley = new Array('Compostela','Laak','Mabini','Maco','Maragusan','Mawab','Monkayo','Montevista','Nabunturan','New Bataan','Pantukan');
	var Davao_del_Norte = new Array('Asuncion','Braulio E. Dujali','Carmen','Kapalong','New Corella','Panabo City','Samal City','San Isidro','Santo Tomas','Tagum City','Talaingod');
	var Davao_del_Sur = new Array('Bansalan','Davao City','Digos City','Hagonoy','Kiblawan','Magsaysay','Malalag','Matanao','Padada','Santa Cruz','Sulop');
	var Davao_Occidental = new Array('Don Marcelino','Jose Abad Santos','Malita','Santa Maria','Sarangani');
	var Davao_Oriental = new Array('Baganga','Banaybanay','Boston','Caraga','Cateel','Governor Generoso','Lupon','Manay','Mati City','San Isidro','Tarragona');
	var Lanao_del_Norte = new Array('Bacolod','Baloi','Baroy','Iligan City','Kapatagan','Kauswagan','Kolambugan','Lala','Linamon','Magsaysay','Maigo','Matungao','Munai','Nunungan','Pantao Ragat','Pantar','Poona Piagapo','Salvador','Sapad','Sultan Naga Dimaporo','Tagoloan','Tangcal','Tubod');
	var Lanao_del_Sur = new Array('Bacolod-Kalawi(Bacolod-Grande)','Balabagan(Wato)','Bayang','Binidayan','Buadiposo-Buntong','Bubong','Bumbaran','Butig','Calanogas','Ditsaan-Ramain','Ganassi','Kapai','Kapatagan','Kapatagan','Lumba-Bayabao','Lumbaca-Unayan','Lumbatan (Macadar)','Lumbayanague (Nanagen)','Madalum','Madamba(Uya-an)','Maguing','Malabang','Marantao (Inudaran)','Marawi City','Marogong','Masiu','Mulondo','Pagayawan','Piagapo','Picong (Sultan Gumander)','Poona Bayabao (Gata)','Pualas','Saguiaran','Sultan Dumalondong (Bacayawan)','Tagoloan II','Tamparan','Taraka','Tubaran','Tugaya','Wao');
	var Maguindanao = new Array('Ampatuan','Barira','Buldon','Buluan','Cotabato City','Datu Abdullah Sangki','Datu Anggal Midtimbang','Datu Blah T. Sinsuat','Datu Hoffer Ampatuan','Datu Odin Sinsuat','Datu Paglas','Datu Piang (Dulawan)','Datu Salibo','Datu Saudi-Ampatuan','Datu Unsay','Gen. S. K. Pendatun','Guindulungan','Kabuntalan','Mamasapano','Mangudadatu','Matanog','Northern Kabuntalan','Pagagawan (Datu Montawal)','Pagalungan','Paglat','Pandag','Parang','Rajah Buayan','Shariff Aguak (Maganoy)','Shariff Saydona Mustapha','South Upi','Sultan Kudarat (Nuling)','Sultan Mastura','Sultan sa Barongis (Lambayong)','Sultan Sumagka (Talitay)','Talayan','Upi');
	var Misamis_Occidental = new Array('Aloran','Baliangao','Bonifacio','Calamba','Clarin','Concepcion','Don Victoriano Chiongbian','Jimenez','Lopez Jaena','Oroquieta City','Ozamiz City','Panaon','Plaridel','Sapang Dalaga','Sinacaban','Tangub City','Tudela');
	var Misamis_Oriental = new Array('Alubijid','Balingasag','Balingoan','Binuangan','Cagayan de Oro ','Claveria','El Salvador','Gingoog','Initao','Jasaan','Kinoguitan','Lagonglong','Laguindingan','Libertad','Lugait','Magsaysay','Manticao','Medina','Naawan','Opol','Salay','Sugbongcogon','Tagoloan','Talisayan','Villanueva');
	var North_Cotabato = new Array('Alamada','Aleosan','Antipas','Arakan','Banisilan','Carmen','Kabacan','Kidapawan','Libungan','Mlang','Magpet','Makilala','Matalam','Midsayap','Pigcawayan','Pikit','President Roxas','Tulunan');
	var Sarangani = new Array('Alabel','Glan','Kiamba','Maasim','Maitum','Malapatan','Malungon');
	var South_Cotabato = new Array('General Santos','Koronadal','Banga','Lake Sebu','Norala','Polomolok','Santo Niño','Surallah','Tboli','Tampakan','Tantangan','Tupi');
	var Sultan_Kudarat = new Array('Tacurong','Bagumbayan','Columbio','Esperanza','Isulan','Kalamansig','Lambayong','Lebak','Lutayan','Palimbang','President Quirino','Senator Ninoy Aquino');
	var Sulu = new Array('Banguingui','Hadji Panglima Tahil','Indanan','Jolo','Kalingalan Caluang','Lugus','Luuk','Maimbung','Old Panamao','Omar','Pandami','Panglima Estino','Pangutaran','Parang','Pata','Patikul','Siasi','Talipao','Tapul');
	var Surigao_del_Norte = new Array('Surigao','Alegria','Bacuag','Burgos','Claver','Dapa','Del Carmen','General Luna','Gigaquit','Mainit','Malimono','Pilar','Placer','San Benito','San Francisco','San Isidro','Santa Monica','Sison','Socorro','Tagana-an','Tubod');
	var Surigao_del_Sur = new Array('Bislig','Tandag','Barobo','Bayabas','Cagwait','Cantilan','Carmen','Carrascal','Cortes','Hinatuan','Lanuza','Lianga','Lingig','Madrid','Marihatag','San Agustin','San Miguel','Tagbina','Tago');
	var Tawi_Tawi = new Array('Bongao','Languyan','Mapun','Panglima Sugala','Sapa-Sapa','Sibutu','Simunul','Sitangkai','South Ubian','Tandubas','Turtle Islands');
	var Zamboanga_del_Norte = new Array('Dapitan','Dipolog','Balinguan','Godod','Gutalac','Jose Dalman','Kalawit','Katipunan','La Libertad','Labason','Leon B. Postigo','Liloy','Manukan','Mutia','Piñan','Polanco','President Manuel A. Roxas','Rizal','Salug','Sergio Osmeña Sr.','Siayan','Sibuco','Sibutad','Sindangan','Siocon','Sirawai','Tampilisan');
	var Zamboanga_del_Sur = new Array('Pagadian','Zamboanga','Aurora','Bayog','Dimataling','Dinas','Dumalinao','Dumingag','Guipos','Josefina','Kumalarang','Labangan','Lakewood','Lapuyan','Mahayag','Margosatubig','Midsalip','Molave','Pitogo','Ramon Magsaysay','San Miguel','San Pablo','Sominot','Tabina','Tambulig','Tigbao','Tukuran','Vincenzo A. Sagun');
	var Zamboanga_Sibugay = new Array('Alicia','Buug','Diplahan','Imelda','Ipil','Kabasalan','Mabuhay','Malangas','Naga','Olutanga','Payao','Roseller Lim',' Siay','Talusan','Titay','Tungawan');


	
	switch (ddl1.value) {
        case 'Agusan del Norte':
            ddl2.options.length = 0;
            for (i = 0; i < Agusan_del_Norte.length; i++) {
                createOption(ddl2,Agusan_del_Norte[i], Agusan_del_Norte[i]);
            }
            break;
			
		case 'Agusan del Sur':
            ddl2.options.length = 0;
            for (i = 0; i < Agusan_del_Sur.length; i++) {
                createOption(ddl2,Agusan_del_Sur[i], Agusan_del_Sur[i]);
            }
            break;
		
		case 'Basilan':
            ddl2.options.length = 0;
            for (i = 0; i < Basilan.length; i++) {
                createOption(ddl2,Basilan[i], Basilan[i]);
            }
            break;
		
		case 'Bukidnon':
            ddl2.options.length = 0;
            for (i = 0; i < Bukidnon.length; i++) {
                createOption(ddl2,Bukidnon[i], Bukidnon[i]);
            }
            break;
			
		case 'Camiguin':
            ddl2.options.length = 0;
            for (i = 0; i < Camiguin.length; i++) {
                createOption(ddl2,Camiguin[i], Camiguin[i]);
            }
            break;
		
		case 'Compostella Valley':
            ddl2.options.length = 0;
            for (i = 0; i < Compostella_Valley.length; i++) {
                createOption(ddl2,Compostella_Valley[i], Compostella_Valley[i]);
            }
            break;
		
		case 'Davao del Norte':
            ddl2.options.length = 0;
            for (i = 0; i < Davao_del_Norte.length; i++) {
                createOption(ddl2,Davao_del_Norte[i], Davao_del_Norte[i]);
            }
            break;

		case 'Davao del Sur':
            ddl2.options.length = 0;
            for (i = 0; i < Davao_del_Sur.length; i++) {
                createOption(ddl2,Davao_del_Sur[i], Davao_del_Sur[i]);
            }
            break;
		
	
		
		
	
		
		
        default:
            ddl2.options.length = 0;
            break;
    }

	function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }
	
	}
</script>