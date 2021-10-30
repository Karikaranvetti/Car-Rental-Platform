<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Rent a Vehicle</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
	</head>

	<body>
<style>
body {
  color: white
}

</style>
	
		<?php include"navbar.php";?>
		
		
		<img src="car1.jpg" width="1500" height="300">
	
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > Organization Information</h3><br>
					<img src="home.jpg" class="imgs">
					<p class="para">
						Car and bus travel agencies need and effective Management platform for handling their 
                                                 respective transportation services. 
                                                 The existing  system relies on manual date recording for management which is very tedious and time consuming involving a lot of 
                                         man power and paper work  so current system need to be computerized  and if possible web based.					</p>
					
					<p class="para">
						
					</p>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>