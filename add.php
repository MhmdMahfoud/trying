<?php
	include('conn.php');
	

	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
    $phoneNumber=$_POST['phoneNumber'];
 
	mysqli_query($conn,"insert into `user` (firstname,lastname,phoneNumber) values ('$firstname','$lastname','$phoneNumber')");
	header('location:index.php');
 
?>