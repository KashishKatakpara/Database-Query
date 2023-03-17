<?php
	include "connection.php";
	$fnm=$_REQUEST['fnm'];
	$mnm=$_REQUEST['mnm'];
	$lnm=$_REQUEST['lnm'];
	$course=$_REQUEST['course'];
	$rd=$_REQUEST['rd'];
	$phone=$_REQUEST['phone'];
	$adr=$_REQUEST['adr'];
	$email=$_REQUEST['email'];
	$pwd=$_REQUEST['pwd'];
	$pwdrpt=$_REQUEST['pwdrpt'];
	$insert="INSERT INTO `query` (`fnm`,`mnm`,`lnm`,`course`,`rd`,`phone`,`adr`,`email`,`pwd`,`pwdrpt`) VALUES('$fnm','$mnm','$lnm','$course','$rd','$phone','$adr','$email','$pwd','$pwdrpt');";
	$result=mysqli_query($con,$insert);
    header ("location:form.php");
?>