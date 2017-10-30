<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

	<head>

</div>
		<title>CARRIAGE TOURS MACKINAC ISLAND</title>
		<meta charset="utf-8" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
<link rel="icon" type="image/png" href="images/horse.png" sizes="16x16">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a href="index.html" id="logo"></a></h1>
							<p>CARRIAGE TOURS MACKINAC ISLAND</p>
						</div>
					</div>
				</header>

	
			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.html">Home</a></li>
						<li><a href="carriagetours.html">Carriage Tours</a></li>
					    <li>
							<a href="#">Services</a>
						<ul>
								<li><a href="carriagetours.html">Public Tours</a></li>
								<li><a href="carriagetours.html">Private Tours</a></li>
								<li><a href="carriagetours.html">Taxi</a></li>
								<li><a href="carriagetours.html">Hotel Shuttle</a></li>
								<li><a href="carriagetours.html">Weddings</a></li>
						</ul>
						</li>
						<li><a href="schedule.html">Schedule</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
	<!-- Main -->
<form action="" method="POST">
		
		Nume:<input name="nume" type="text"><br>
		Prenume: <input name="prenume" type="text"><br>
		Telefon <input name="telefon" type="text"><br><br>
<input type="submit" name="SubmitButton" class="button" value="Programeaza">

</form>
<?php

if(isset($_POST['SubmitButton'])){  

  $name = $_POST['nume']; 
  $pren = $_POST['prenume'];
  $tel = $_POST['telefon'];
  if(!empty($nume)&&!empty($prenume)&&!empty($tel))
  {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "programare";
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $sql = "INSERT INTO persons (nume, prenume, telefon)
VALUES ('".$name."', '".$pren."', '".$tel."')";

if (mysqli_query($conn, $sql)) {
    echo "Programat cu success";
} else {
    echo "Nu se poate: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
  }
  else
  {
	  echo "Nu ati completat toate campurile ";
  }
  }
?>

	
	
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
</body>
</html>