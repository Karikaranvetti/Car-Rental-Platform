<?php
	include"database.php";
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Rent A Vehicle</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
	</head>
	
	<body>
			<?php include"navbar.php";?><br>
			<img src="a1.jpg" style="margin-left:90px;" class="sha">
			
			<div id="section">
				
				
				
				
				<div class="content1">
					
						<h3 >Sign up</h3><br>
						
					<?php
						if(isset($_POST["submit"]))
						{
							$sq="insert into customer(NAME,EMAIL,PASS) values('{$_POST["name"]}','{$_POST["mail"]}','{$_POST["pass"]}')";
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
					     <label> Name</label><br>
					     <input type="text" name="name" required class="input">
					     <br><br>
					     <label>Email</label><br>
					     <input type="text" name="mail" required class="input">
					     <br><br>
					     <label>Passsword<label><br>
					     <input type="password" name="pass" required class="input">
					     <br><br>
					     <button type="submit" class="btn" name="submit">Add Customer Details</button>
					</form>
				
				
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>