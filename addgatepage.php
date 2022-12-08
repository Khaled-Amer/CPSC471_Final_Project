<?php
session_start();
$username = $_POST['username'];
$flight = $_POST['flight'];


$con=mysqli_connect("localhost","student","ensf","471");

$query="INSERT INTO PREPARE VALUES('" . $username . "', '" . $flight . "')";

$result = mysqli_query($con,$query);
echo $username;
echo " Added Staff to Gate ";
echo $flight;

?>