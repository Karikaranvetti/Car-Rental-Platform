<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Vehicle Management System - Rent a Vehicle</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
	</head>
<style>
body{
color:white;
}
</style>
	<body class="back">
		<?php include"navbar.php";?>
		<img src="car1.jpg" width="800">
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
				Rent a Vehicle<BR>
					<BR>
					Penideniya Road,<BR>
					BGK 55115172<BR>
					Mail - Rentavehicle@gmail.com<br>Phone - 94777123456
				</form>
			</div>
		</div>
		<div class="footer">
			<footer><p>Copyright &copy; Rent a Vehicle </p></footer>
		</div>
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
		
	
		
	</body>
</html>