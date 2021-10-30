<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Rent a Vehicle</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
	</head>
	
	<body>
			<?php include"navbar.php";?><br>
			
			
			<div id="section">
				
				<?php include"sidebar.php";?><br><br><br>
				
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > Add Vehicle Details</h3><br>
						 <?php  if(isset($_FILES['img'])){
    							echo $_FILES['img']['tmp_name'];}	?>
					<?php
						if(isset($_POST["submit"]))
						{   $target="vehicle/";
							$target_file=$target;
							
							$sq="insert into vehicle(NO,TYPE,AVAILABLE,DRIVER,RENT,IMG) values('{$_POST["vno"]}','{$_POST["vtype"]}','{$_POST["isavail"]}','{$_POST["vdriver"]}','{$_POST["vrent"]}','{$_POST["img"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert Failed..</div>";
							}
							
						}
						
					?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					     <label>VEHICLE NO</label><br>
					     <input type="text" name="vno" required class="input">
					     <br><br>
					     <label>TYPE</label><br>
					     <input type="text" name="vtype" required class="input">
					     <br><br>
					     <label>AVAILABILITY</label><br>
					     <input type="text" name="isavail" required class="input">
					     <br><br>
						  <label>DRIVER</label><br>
					     <input type="text" name="vdriver" required class="input">
					     <br><br>
					     <label>RENT</label><br>
					     <input type="text" name="vrent" required class="input">
					     <br><br>
					    Select a file:<input type="file" required name="img"><br><br>
					     <button type="submit" class="btn" name="submit">Add Vehicle Details</button>
					</form>
				
				
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>