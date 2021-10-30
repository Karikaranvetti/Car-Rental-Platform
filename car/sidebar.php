<div class="sidebar">
<style>


</style>
	<br>
<h3 class="text">Dashboard</h3><br><hr><br>

<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
  
  <div id="sidebarMenu">
    
      <li class="li"><a href="admin_home.php">Organization Information</a></li>
			<li class="li"><a href="view_orders.php">View Orders</a></li>
			<li class="li"><a href="available_vehicle.php"> View Vehicle</a></li>
			<li class="li"><a href="add_vehicle.php">Add Vehicle</a></li>
  </div>
			
		
		';
	
	
	}


?>
	



</div>