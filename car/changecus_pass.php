<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["CNAME"]))
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
		
					<h3 class="text">Welcome <?php echo $_SESSION["CNAME"]; ?></h3><br><hr><br>
					
				<div class="content1">
					
						<h3 > Change Password</h3><br>
						<?php
							if(isset($_POST["submit"]))
							{
								$sql="select * from customer where PASS='{$_POST["opass"]}' and NAME='{$_SESSION["CNAME"]}'";
								$result=$db->query($sql);
								if($result->num_rows>0)
								{
									if($_POST["npass"]==$_POST["cpass"])
									{
										$s="update customer SET PASS='{$_POST["npass"]}' where NAME='{$_SESSION["CNAME"]}'";
										$db->query($s);
										echo "<div class='success'>Password Changed</div>";
									}
									else
									{
										echo "<div class='error'>Password Mismatch</div>";
									}
								}
								else
								{
									echo "<div class='error'>Invalid Password</div>";
								}
							}
						
						
						?>
						
							
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
						<label>Old Password</label><br>
						<input type="text" class="input3" name="opass"><br><br>
						<label>New Password</label><br>
						<input type="text" class="input3" name="npass"><br><br>
						<label>Confirm Password</label><br>
						<input type="text" class="input3" name="cpass"><br><br>
						<button type="submit" class="btn" style="float:left" name="submit"> Change Password</button>
					</form>
			
				</div>	
			</div>
			<?php include"footer.php";?>
		
	</body>
</html>