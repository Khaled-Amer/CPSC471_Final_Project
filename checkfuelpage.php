<?php
session_start();
$username = $_POST['username'];
$flight = $_POST['flight'];


$con=mysqli_connect("localhost","student","ensf","471");

$query="INSERT INTO REQUIRES VALUES('" . $username . "', '" . $flight . "')";

$result = mysqli_query($con,$query);
echo $username;
echo " uses fuel ";
echo $flight;

?>