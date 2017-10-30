<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>CARRIAGE TOURS MACKINAC ISLAND</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
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
						<li ><a href="index.html">Home</a></li>
						<li><a href="carriagetours.html">Carriage Tours</a></li>
					    <li>
							<a href="#">Services</a>
						<ul>
								<li><a href="carriagetours.html">Public Tours</a></li>
								<li><a href="carriagetours.html">Private Tours</a></li>
								<li><a href="carriagetours.html">Taxi</a>
								<li><a href="carriagetours.html">Hotel Shuttle</a></li>
								<li><a href="carriagetours.html">Weddings</a></li>
						</ul>
						</li>
						<li><a href="carriagetours.html">Schedule</a></li>
						<li class="current"><a href="#">Contact</a></li>
					</ul>
				</nav>


			<!-- Main -->
			<div style="width:300px;margin-left:100px">
		<form action="" method="POST">
		
		FirtName:<input name="prenume" type="text" style="height:30px"><br>
		LastName: <input name="nume" type="text"><br>
		PhoneNumber: <input name="telefon" type="number_format"><br>
		Email: <input name="email" type="text"><br>
		Date: <input name="data" type="date"><br><br>
		
<input type="submit" name="SubmitButton" class="button" value="Booking">

</form>
</div>
<?php

if(isset($_POST['SubmitButton'])){  

  $firstname = $_POST['prenume']; 
  $lastname = $_POST['nume'];
  $phonenumber = $_POST['telefon'];
  $email = $_POST['email'];
  $date = $_POST['data'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $sql = "INSERT INTO persons (firstname, lastname, phonenumber,email,date)
VALUES ('".$firstname."', '".$lastname."', '".$phonenumber."','".$email."','".$date."')";

if (mysqli_query($conn, $sql)) {
   if(!empty($firstname)) echo "Success";
} else {
    echo "Nu se poate: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
  }
?>
			<!-- Footer -->
				<footer id="footer" class="container">
					<div class="row 200%">
						<div class="12u">

							<!-- About -->
								<section>
									<h2 class="major"><span>SEE MORE</span></h2>
									<p>
										
									</p>
								</section>

						</div>
					</div>
					<div class="row 200%">
						<div class="12u">

							<!-- Contact -->
								<section>
									<h2 class="major"><span>Get in touch</span></h2>
									<ul class="contact">
										<li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
										<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
										<li><a class="icon fa-instagram" href="#"><span class="label">Instagram</span></a></li>
										<li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
										<li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
									</ul>
								</section>

						</div>
					</div>

					<!-- Copyright -->
						<div id="copyright">
							<ul class="menu">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>

				</footer>

			</div>

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