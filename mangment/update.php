<?php
include('conn.php');
$id = $_GET['id'];

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phoneNumber = $_POST['phoneNumber'];
mysqli_query($conn, "update `user` set firstname='$firstname', lastname='$lastname',phoneNumber='$phoneNumber', where userid='$id'");
header('location:index.php');
?>