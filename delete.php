<?php
	include "connection.php";
	$id=$_REQUEST['id'];
	$delete="DELETE * FROM `query` WHERE `id`='$id'";
	$result=mysqli_query($con,$delete);
	header ("location:select.php");
?>