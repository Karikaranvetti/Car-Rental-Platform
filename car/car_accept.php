<?php
	include "database.php";
	session_start();
	$s="UPDATE `vehicle` SET `AVAILABLE` = 'notavailable' WHERE `vehicle`.`NO` = '{$_GET["id"]}'";
	$db->query($s);
	echo "<script>window.open('view_orders.php?mes=order accepted {$_GET["id"]}','_self');</script>";


?>
