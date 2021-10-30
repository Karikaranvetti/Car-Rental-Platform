<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["CNAME"]))
	{
		echo"<script>window.open('customer_login.php?mes=Access Denied...','_self');</script>";
		
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
					
						<h3 > Add Vehicle Details</h3><br>
						 <?php  if(isset($_FILES['img'])){
    							echo $_FILES['img']['tmp_name'];}	?>
					<?php
                                              
                                                        
						if(isset($_POST["submit"]))
						{       $target="vehicle/";
							$target_file=$target;
							 
						
							$sq="insert into advertisement(NAME,PNO,PRICE,IMG,MAIL) values('{$_POST["name"]}','{$_POST["phno"]}','{$_POST["price"]}','{$_POST["img"]}','{$_SESSION["CMAIL"]}')";
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
					     <label>NAME</label><br>
					     <input type="text" name="name" required class="input">
					     <br><br>
					     <label>PHONE NO</label><br>
					     <input type="text" name="phno" required class="input">
					     <br><br>
					     <label>PRICE</label><br>
					     <input type="text" name="price" required class="input">
					     <br><br>
						  
					    Select a file:<input type="file" required name="img"><br><br>
					     <button type="submit" class="btn" name="submit">Add Vehicle Details</button>
					</form>
				
				
				</div>
				
				
			</div>

				<div class="content">
					
						<h3 >Available Vehicles</h3><br>
					
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<style>
table, th, td {
  
  padding: 50px;
  background-color: url("/graphics/background-fabric.jpg");
}
table {
  border-spacing: 20px;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: url("/graphics/background-fabric.jpg");
  color: white;
  transform: rotateY(180deg);
}
.zoom {
  
  
  transition: transform .2s;
 
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
</style>
					<table >
						
						<?php
							$s="select * from advertisement";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo"
									<th>
									
									<div class='flip-card'>
                                     <div class='flip-card-inner'>
                                       <div class='flip-card-front'>
                                       <img src='" . $r["IMG"] . "' alt='Avatar' style='width:300px;height:300px;'>
                                          </div>
                                        <div class='flip-card-back'><br>
										<div class='zoom'>
                                      <h1>Vehicle Name: {$r["NAME"]} </h1></div> <br>
                                      <div class='zoom'> <p>Price:{$r["PRICE"]}</p></div> <br>
                                      <div class='zoom'><p>Contact:{$r["PNO"]}</p></div><br><br><br>
									  
	                             
									   <div class='zoom'>
									
									   
                                         </div>
                                         </div>
                                        </div>
									
									</div>
									</th>";
									
									if($i%3==0){
										echo"<tr></tr>";
									}
								}
							}
							else
							{
								echo "No Record Found";
							}
						
						?>
						
					</table>
				
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>