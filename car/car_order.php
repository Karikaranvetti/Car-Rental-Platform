<?php
	include "database.php";
	session_start();
	$s="INSERT INTO `orders`(`NO`, `CUSTOMER`,`DATE`,`TIME`) VALUES ('{$_GET["id"]}','{$_GET["mail"]}','{$_GET["date"]}','{$_GET["time"]}')";
	$db->query($s);
    	$a="UPDATE vehicle SET AVAILABLE='not available' WHERE NO='{$_GET["id"]}'";
	$db->query($a);
	echo "<script>window.open('car_details.php?mes=order accepted {$_GET["id"]}','_self');</script>";


?>
