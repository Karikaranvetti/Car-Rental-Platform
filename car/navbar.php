<div class="navbar">

			<ul class="list">
				<b style="color:white;float:left;line-height:50px;margin-left:30px;font-family:Cooper Black;">
				Rent A Vehicle</b>
			<?php
				if(isset($_SESSION["AID"]))
				{
					echo'
				
						<li><a href="admin_home.php">Admin Home</a></li>
				<li><a href="change_pass.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
			else if(isset($_SESSION["CNAME"])){
									echo'
				
						<li><a href="car_details.php">Vehicle details</a></li>
                                             <li><a href="advertisement.php">Advertisements</a></li>

				<li><a href="changecus_pass.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
			}
				else{
					echo'
					
					<li><a href="index.php">Admin</a></li>
				<li><a href="customer_login.php">Customer</a></li>
				<li><a href="signup.php">Signup</a></li>
				<li><a href="contact.php">Contact Us</a></li>';
				}
			?>
				
			</ul>
		</div>
		