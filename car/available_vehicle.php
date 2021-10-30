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
			
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
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
							$s="select * from vehicle";
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
                                      <h1>Vehicle No: {$r["NO"]} </h1></div> <br>
                                      <div class='zoom'> <p>Vehicle type:{$r["TYPE"]}</p></div> <br>
                                      <div class='zoom'><p>Driver Name:{$r["DRIVER"]}</p></div><br><br>
									  <div class='zoom'><p>Rent</p>
	                                   <p>{$r["RENT"]}</p></div><br>
                                              <div class='zoom'><p>{$r["AVAILABLE"]}</p></div>
									   
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